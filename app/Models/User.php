<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Filament\Panel;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

#[Fillable(['name', 'email', 'password'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable, HasRoles;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function canAccessPanel(Panel $panel): bool
    {
        // ──────────────────────────────────────────────────────────
        // Panel access gate — runs after successful authentication
        // and before the dashboard renders.
        //
        // STRATEGY: Allow ANY authenticated user to enter the admin
        // panel.  The dashboard (home page) has no sensitive data.
        //
        // Fine-grained authorization for individual resources
        // (Posts, Users, Roles, etc.) is enforced by:
        //   1. Gate::before() in AppServiceProvider — Super Admin
        //      bypasses all policy / permission checks.
        //   2. Model policies (UserPolicy, PostPolicy, …) that use
        //      Spatie Permission's $user->can('view …').
        //
        // Users without a role will see the dashboard but all
        // resource links will be hidden (or return 403 if accessed
        // directly).  That's by design — assign roles via the
        // seeder or the RoleResource UI.
        //
        // TROUBLESHOOTING — If you still see 403 after deploying:
        //   1. SSH into the server and run:
        //        php artisan optimize:clear
        //      (This clears config, route, view caches AND opcache)
        //   2. If using shared hosting (Hostinger, cPanel):
        //      Go to hPanel → PHP → Restart PHP (or toggle the
        //      PHP version) to flush OPcache.
        //   3. Verify the seeder ran:
        //        php artisan db:seed --class=AdminSeeder --force
        //   4. Check that roles/permissions tables have data:
        //        php artisan tinker --execute="print_r(Spatie\Permission\Models\Role::all()->pluck('name')->toArray());"
        // ──────────────────────────────────────────────────────────
        return true;
    }
}
