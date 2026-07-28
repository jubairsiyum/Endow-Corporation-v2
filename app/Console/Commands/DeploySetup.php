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
        $this->info('1/7 Clearing stale caches...');
        $this->call('config:clear');
        $this->call('route:clear');
        $this->call('view:clear');
        $this->call('cache:clear');

        // 3. Run migrations
        $this->info('2/7 Running migrations...');
        $this->call('migrate', ['--force' => true]);

        // 4. Seed roles, permissions & admin user
        $this->info('3/7 Seeding roles, permissions & admin user...');
        $this->call('db:seed', ['--force' => true]);

        // 5. Clear Spatie permission cache explicitly
        $this->info('4/7 Flushing Spatie permission cache...');
        try {
            app('cache')->store(
                config('permission.cache.store', 'default')
            )->forget(
                config('permission.cache.key', 'spatie.permission.cache')
            );
        } catch (\Throwable $e) {
            $this->warn('   Spatie cache flush skipped: ' . $e->getMessage());
        }

        // 6. Storage link (skip gracefully on shared hosting)
        $this->info('5/7 Creating storage link...');
        if (env('FILESYSTEM_PUBLIC_ROOT')) {
            $this->warn('   Skipped — FILESYSTEM_PUBLIC_ROOT is set. Symlink not needed.');
        } else {
            $exitCode = $this->call('storage:link');
            if ($exitCode !== 0) {
                $this->warn('   storage:link failed. Set FILESYSTEM_PUBLIC_ROOT in .env instead.');
            }
        }

        // 7. Cache config, routes, views
        $this->info('6/7 Caching config, routes & views...');
        $this->call('config:cache');
        $this->call('route:cache');
        $this->call('view:cache');

        // 8. Set permissions on storage and bootstrap/cache
        $this->info('7/7 Setting directory permissions...');
        foreach ([storage_path(), bootstrap_path('/cache')] as $dir) {
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
