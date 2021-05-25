<?php

namespace App\Http\Middleware;

use Closure;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->role == 2 || $user->role == 3) {
                return $next($request);
            }
            return redirect(route('admin.dashboard.index'));
        }
        return redirect(route('login'));
    }
}
