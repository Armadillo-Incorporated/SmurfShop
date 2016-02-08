<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfNotModerator
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
        // if (! $request->user()->isModerator()) {

        // }

        return $next($request);
    }
}
