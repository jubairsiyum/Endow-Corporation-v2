<?php

namespace App\Providers;

use App\Models\Appointment;
use App\Models\Category;
use App\Models\ContactMessage;
use App\Models\Newsletter;
use App\Models\Post;
use App\Models\User;
use App\Policies\AppointmentPolicy;
use App\Policies\CategoryPolicy;
use App\Policies\ContactMessagePolicy;
use App\Policies\NewsletterPolicy;
use App\Policies\PostPolicy;
use App\Policies\RolePolicy;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Role;

class AppServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Post::class => PostPolicy::class,
        Category::class => CategoryPolicy::class,
        Appointment::class => AppointmentPolicy::class,
        ContactMessage::class => ContactMessagePolicy::class,
        Newsletter::class => NewsletterPolicy::class,
        User::class => UserPolicy::class,
        Role::class => RolePolicy::class,
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // ──────────────────────────────────────────────────────────
        // CRITICAL: Gate::before — Super Admin bypass
        //
        // This hook runs BEFORE every Gate / Policy authorization
        // check. If the authenticated user holds the "Super Admin"
        // role, ALL checks are immediately granted — policies and
        // Spatie Permission lookups are completely bypassed.
        //
        // This solves the 403 Forbidden error that occurs after
        // login when:
        //   1. The production database hasn't been seeded yet
        //      (permissions / role_has_permissions tables empty)
        //   2. OPcache is still serving old code where
        //      canAccessPanel() did not return true
        //   3. Spatie Permission's auto-discovery failed silently
        //      and $user->can() returns false for everything
        // ──────────────────────────────────────────────────────────
        Gate::before(function ($user) {
            if ($user instanceof User && $user->hasRole('Super Admin')) {
                return true;
            }

            // Returning null (not false) lets the normal Gate /
            // Policy / Spatie Permission flow continue for non-
            // Super-Admin users so that Editor/Viewer roles still
            // get their fine-grained checks.
            return null;
        });

        $this->registerPolicies();
    }
}
