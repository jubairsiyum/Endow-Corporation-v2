<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class DeploySetup extends Command
{
    protected $signature = 'deploy:setup';
    protected $description = 'Run post-deployment setup: migrations, seeding, cache clear, storage link';

    public function handle(): int
    {
        $this->info('=== Endow Corporation — Post-Deploy Setup ===');
        $this->newLine();

        // 1. Ensure .env exists
        if (!File::exists(base_path('.env'))) {
            $this->info('Creating .env from .env.example...');
            if (File::exists(base_path('.env.example'))) {
                File::copy(base_path('.env.example'), base_path('.env'));
                $this->call('key:generate');
            } else {
                $this->error('.env and .env.example both missing. Aborting.');
                return 1;
            }
        }

        // 2. Clear caches first (in case config blocks migration)
        $this->info('1/8 Clearing stale caches...');
        $this->call('config:clear');
        $this->call('route:clear');
        $this->call('view:clear');
        $this->call('cache:clear');

        // 3. Run migrations
        $this->info('2/8 Running migrations...');
        $this->call('migrate', ['--force' => true]);

        // 4. Seed roles, permissions & admin user
        $this->info('3/8 Seeding roles, permissions & admin user...');
        $this->call('db:seed', ['--force' => true]);

        // 5. Clear Spatie permission cache explicitly
        $this->info('4/8 Flushing Spatie permission cache...');
        try {
            app('cache')->store(
                config('permission.cache.store', 'default')
            )->forget(
                config('permission.cache.key', 'spatie.permission.cache')
            );
        } catch (\Throwable $e) {
            $this->warn('   Spatie cache flush skipped: ' . $e->getMessage());
        }

        // 6. Storage — create public/storage directory or symlink
        $this->info('5/8 Setting up storage...');
        if (env('FILESYSTEM_USE_PUBLIC_PATH', false)) {
            // ── Shared-hosting mode: uploads go directly to public/storage/ ──
            $publicStorage = public_path('storage');
            if (!is_dir($publicStorage)) {
                File::makeDirectory($publicStorage, 0775, true);
                $this->info('   Created public/storage/ directory (no symlink needed).');
            } else {
                $this->info('   public/storage/ already exists.');
            }
            @chmod($publicStorage, 0775);

            // Migrate any files from the old location (storage/app/public/) into
            // public/storage/ if they are not already there.
            $oldRoot = storage_path('app/public');
            if (is_dir($oldRoot)) {
                $migrated = 0;
                foreach (File::allFiles($oldRoot) as $file) {
                    $relative = $file->getRelativePathname();
                    $dest = $publicStorage . DIRECTORY_SEPARATOR . $relative;
                    $destDir = dirname($dest);
                    if (! is_dir($destDir)) {
                        File::makeDirectory($destDir, 0775, true);
                    }
                    if (! file_exists($dest)) {
                        File::copy($file->getPathname(), $dest);
                        $migrated++;
                    }
                }
                if ($migrated > 0) {
                    $this->info("   Migrated {$migrated} files from storage/app/public/ → public/storage/.");
                }
            }
        } elseif (env('FILESYSTEM_PUBLIC_ROOT')) {
            $this->warn('   Skipped — FILESYSTEM_PUBLIC_ROOT is set. Symlink not needed.');
        } else {
            // Standard symlink mode. Remove stale public/storage directory first
            // (e.g. leftover from a previous FILESYSTEM_USE_PUBLIC_PATH=true run,
            // or a failed symlink attempt).
            $publicStorage = public_path('storage');
            if (is_dir($publicStorage) && ! is_link($publicStorage)) {
                // It's a real directory, not a symlink — remove it so storage:link
                // can create a proper symlink.
                $isEmpty = count(File::allFiles($publicStorage)) === 0
                    && count(File::directories($publicStorage)) === 0;
                if ($isEmpty) {
                    File::deleteDirectory($publicStorage);
                    $this->info('   Removed stale public/storage/ directory.');
                } else {
                    $this->warn('   public/storage/ contains files and is not a symlink.');
                    $this->warn('   To avoid data loss, skipping removal. Set FILESYSTEM_USE_PUBLIC_PATH=true in .env instead.');
                }
            }

            if (! is_dir($publicStorage) || is_link($publicStorage)) {
                $exitCode = $this->call('storage:link');
                if ($exitCode !== 0) {
                    $this->warn('   storage:link failed. Your server likely does not support symlinks.');
                    $this->warn('   Set FILESYSTEM_USE_PUBLIC_PATH=true in .env and run deploy:setup again.');
                }
            }
        }

        // 7. Regenerate Composer autoloader (picks up new helpers, classes)
        $this->info('6/8 Regenerating Composer autoloader...');
        $composerHome = base_path('composer.phar');
        $composerBin = (PHP_OS_FAMILY === 'Windows') ? 'composer' : 'composer';
        if (PHP_OS_FAMILY !== 'Windows' && File::exists($composerHome)) {
            $composerBin = 'php ' . escapeshellarg($composerHome);
        }
        $output = null;
        $resultCode = null;
        exec($composerBin . ' dump-autoload --no-interaction 2>&1', $output, $resultCode);
        if ($resultCode === 0) {
            $this->info('   Autoloader regenerated successfully.');
        } else {
            $this->warn('   composer dump-autoload failed (exit code ' . $resultCode . ').');
            $this->warn('   Run "composer dump-autoload" manually if storage_url() is undefined.');
        }

        // 8. Cache config, routes, views
        $this->info('7/8 Caching config, routes & views...');
        $this->call('config:cache');
        $this->call('route:cache');
        $this->call('view:cache');

        // 9. Set permissions on storage and bootstrap/cache
        $this->info('8/8 Setting directory permissions...');
        foreach ([storage_path(), base_path('bootstrap/cache')] as $dir) {
            if (is_dir($dir)) {
                @chmod($dir, 0775);
                foreach (File::allDirectories($dir) as $sub) {
                    @chmod($sub, 0775);
                }
            }
        }

        $this->newLine();
        $this->info('=== Deployment complete! ===');
        $this->newLine();
        $this->info('Admin login: admin@endowcorporation.com');
        $this->info('Password:     admin123');
        $this->newLine();
        $this->warn('IMPORTANT: Change the admin password after first login!');

        return 0;
    }
}
