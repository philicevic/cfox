<?php

namespace App\Http\Middleware;

use Closure;

class AppAdmin
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
        // Check if user is logged in
        if (!$request->user()) {
            return redirect(route('login'));
        }

        // Check if user is admin
        if (!$request->user()->admin) {
            return redirect(route('home'));
        }
        
        return $next($request);
    }
}
