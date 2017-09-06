<?php

namespace App\Http\Middleware;

use Closure;

class ClanAuthentication
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
        $user = $request->user();

        // Check if user is logged in
        if (!$user) {
          return redirect(\Config::get('app.url'));
        }

        // fetch clan_ids of current user
        $clan_ids = array();
        foreach ($user->clans as $clan) {
            $clan_ids[] = $clan->id;
        }
        
        // store requested clan
        $request_clan = request()->route()->parameters();

        // Check if user is allowed to visit subdomain
        if ($user && in_array($request_clan['clan']->id, $clan_ids)) {
          return $next($request);
        }
        // otherwise redirect to cfox main page
        return redirect(\Config::get('app.url'));
    }
}
