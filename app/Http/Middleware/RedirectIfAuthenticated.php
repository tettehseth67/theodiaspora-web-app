<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): \Illuminate\Http\Response  $next
     * @param  string[]  ...$guards
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        // If no specific guard is passed, check both
        $guards = empty($guards) ? ['web', 'admin'] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                // Admins go to admin.dashboard
                if ($guard === 'admin') {
                    return redirect()->route('admin.dashboard');
                }
                // Web users go to user.dashboard
                return redirect()->route('user.dashboard');
            }
        }

        return $next($request);
    }
}
