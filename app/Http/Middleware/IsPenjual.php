<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsPenjual
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->role == 'slr'){
            return $next($request);
        }

        return redirect()->back()->with('error',"You don't have penjual access.");
    }
}
