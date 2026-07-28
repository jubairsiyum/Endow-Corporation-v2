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
        try {
            if ($this->hasAnyRole(['Super Admin', 'Editor', 'Viewer'])) {
                return true;
            }
        } catch (\Throwable $e) {
            // Spatie tables may not exist on fresh deployment
        }

        // Fallback: allow specific admin email(s) via env or the default
        $allowedEmails = array_filter(
            explode(',', env('FILAMENT_ADMIN_EMAILS', 'admin@endowcorporation.com'))
        );

        if (in_array($this->email, $allowedEmails, true)) {
            return true;
        }

        // Last-resort fallback: if Spatie roles aren't available (tables not migrated
        // or no roles seeded yet), allow any authenticated user so the admin portal
        // remains accessible. The panel is already protected by ->login().
        try {
            \Spatie\Permission\Models\Role::count();
        } catch (\Throwable $e) {
            return true;
        }

        return false;
    }
}
