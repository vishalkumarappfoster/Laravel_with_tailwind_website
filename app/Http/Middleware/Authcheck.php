<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Authcheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     if(!Session()->has('loginId')){
    //         return redirect('login')->with('fail', 'Please login first'); 
    //     }
    //     return $next($request);
    // }

    public function handle(Request $request, Closure $next): Response
    {
        if(!Session()->has('loginId')){
            return redirect('login')->with('fail', 'Please login first'); 
        }
        
        // additional check to prevent access after logout
        if ($request->is('students') && !Session()->has('loginId')) {
            return redirect('login')->with('fail', 'Please login first');
        }
        
        return $next($request);
    }
}
