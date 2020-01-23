<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'admin') {
        if (!Auth::guard($guard)->check()) {
            return redirect('/login-admin');
        }
        return $next($request);
    }
}
