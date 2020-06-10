<?php

namespace App\Http\Middleware;

use Closure;

class IsVendor
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
        
        //dd($request);
            if (auth()->user()->role == 'Vendor' || auth()->user()->role =='Admin' ) {
                return $next($request);
            } else {
               //dd('kia');
                return redirect()->back()->with('errors', 'Unautorized');
        
        }
    }
}
