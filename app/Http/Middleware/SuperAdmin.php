<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class SuperAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if (auth()->check() && auth()->user()->is_super_admin) {
        //     return $next($request);
        // }
    
        // return abort(403, 'Unauthorized');
        if(Auth::guard('Sup_admin')->user()){
            return $next($request);
        }
        return redirect('/');
    }
}
