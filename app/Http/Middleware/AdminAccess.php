<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

/**
 * Checks if the authenticated user can access the admin panel.
 * 
 * This runs BEFORE the CheckPermission middleware. Any authenticated
 * user passes this gate — the panel landing page (dashboard) is open.
 * Individual resource access is gated by CheckPermission + policies.
 */
class AdminAccess
{
    public function handle(Request $request, Closure $next)
    {
        if (! auth()->check()) {
            return redirect()->route('admin.login');
        }

        // Super Admin always passes; other roles get through to see
        // the dashboard but will be blocked by CheckPermission for
        // resources they don't have permission for.
        if (! $request->user()->hasRole('Super Admin')) {
            // Non-Super-Admin users are still allowed into the dashboard.
            // The CheckPermission middleware on individual resource
            // routes will handle fine-grained access control.
        }

        return $next($request);
    }
}
