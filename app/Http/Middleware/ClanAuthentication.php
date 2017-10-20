<?php

namespace App\Http\Middleware;

use Closure;
use App\Clan;

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

        $request_clan = request()->route()->parameters()['clan'];

        // Check if user is logged in
        if (!$user) {
          return redirect(route('login'));
        }

        // fetch clan_ids of current user
        $clan_ids = array();
        foreach ($user->clans as $clan) {
            $clan_ids[] = $clan->id;
        }


        // store requested clan

        // Check if user is allowed to visit subdomain
        if ($user && in_array($request_clan->id, $clan_ids)) {
          return $next($request);
        }
        // otherwise redirect to cfox main page
        return redirect(route('home'));
    }
}
