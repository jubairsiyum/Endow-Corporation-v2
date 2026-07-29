<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

/**
 * RBAC permission gate for admin resource routes.
 *
 * Usage in routes:
 *   Route::get('/admin/users')
 *        ->middleware('permission:view users');
 *
 * If the user lacks the permission, a 403 Forbidden response is
 * returned with the missing permission name in the message.
 */
class CheckPermission
{
    public function handle(Request $request, Closure $next, string $permission)
    {
        if (! $request->user() || ! $request->user()->can($permission)) {
            abort(403, "Forbidden — you lack the '{$permission}' permission.");
        }

        return $next($request);
    }
}
