<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class DeployFixPermissions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'deploy:fix-permissions {--force : Skip confirmation in production}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear all caches, flush OPcache, re-seed permissions and roles — fixes 403 Forbidden after deployment';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $env = app()->environment();

        if ($env === 'production' && ! $this->option('force')) {
            $this->warn('⚠  You are running in PRODUCTION.');
            if (! $this->confirm('This will clear ALL caches and re-seed the database. Continue?')) {
                $this->info('Aborted.');
                return self::SUCCESS;
            }
        }

        $this->info('🔧 Starting permission fix routine…');
        $this->newLine();

        // ── Step 1: Clear all Laravel caches ──────────────────────
        $this->info('[1/5] Clearing Laravel caches…');
        Artisan::call('optimize:clear');
        $this->line(trim(Artisan::output()));
        $this->info('✅ Caches cleared.');

        // ── Step 2: Clear Spatie Permission cache ─────────────────
        $this->info('[2/5] Clearing Spatie Permission cache…');
        Artisan::call('permission:cache-reset');
        $this->line(trim(Artisan::output()));
        $this->info('✅ Permission cache cleared.');

        // ── Step 3: Run AdminSeeder with --force ──────────────────
        $this->info('[3/5] Running AdminSeeder (roles + permissions)…');
        Artisan::call('db:seed', [
            '--class' => 'AdminSeeder',
            '--force' => true,
        ]);
        $this->line(trim(Artisan::output()));
        $this->info('✅ AdminSeeder completed.');

        // ── Step 4: Rebuild cached config ─────────────────────────
        $this->info('[4/5] Re-building optimized config cache…');
        Artisan::call('config:cache');
        $this->line(trim(Artisan::output()));
        $this->info('✅ Config cached.');

        // ── Step 5: Verify the fix ────────────────────────────────
        $this->info('[5/5] Verifying roles and permissions…');

        $roles = \Spatie\Permission\Models\Role::count();
        $perms = \Spatie\Permission\Models\Permission::count();
        $superAdmin = \Spatie\Permission\Models\Role::findByName('Super Admin');
        $superAdminPermCount = $superAdmin->permissions()->count();

        $this->table(
            ['Item', 'Count'],
            [
                ['Roles in database', $roles],
                ['Permissions in database', $perms],
                ["Permissions on 'Super Admin'", $superAdminPermCount],
            ]
        );

        if ($roles > 0 && $perms > 0 && $superAdminPermCount > 0) {
            $this->newLine();
            $this->info('🎉 All checks passed! The admin panel should now work.');
            $this->info('   Try logging in at /admin with admin@endowcorporation.com');
            return self::SUCCESS;
        }

        $this->newLine();
        $this->error('❌ Something is still wrong — roles or permissions appear empty.');
        $this->error('   Check that your database connection is correct in .env.');
        return self::FAILURE;
    }
}
