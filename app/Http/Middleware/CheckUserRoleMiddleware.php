<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
{
    // Check if the user is authenticated
    if (auth()->check()) {
        // Check if the authenticated user's role is not zero (assuming zero represents a regular user)
        if (auth()->user()->Role !== 0) {
            return $next($request);
        }
    }

    // If the user is not authenticated or has a role of zero, redirect them to the login page or another appropriate page
    return redirect('/login');
}

}
