<?php

namespace App\Http\Middleware;

use Closure;

class RoleCheck
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
        if (auth()->user()->role == 'Vendor') {
            return $next($request);
        } else {
            auth()->logout();
            return redirect()->back()->with('errors', 'Unautorized');
        }
    }
}
