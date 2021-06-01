<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
            if ($user->isAdmin()) {
                return $next($request);
            }
            // elseif($user->role == 2 || $user->role == 3){
            else{
                return redirect(route('user.dashboard.index'));
            }
        }
        return redirect(route('login'));
    }
}
