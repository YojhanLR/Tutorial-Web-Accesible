<?php

namespace App\Http\Middleware;

use Closure;

class AdminMw
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
        if ($request->user()->type != 'admin')
        {
            return redirect('/member');
        }

        return $next($request);
    }
}
