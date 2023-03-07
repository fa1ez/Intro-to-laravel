<?php

namespace App\Http\Middleware;

use App\Models\Admin;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        
        //return response(Auth::guard('admin'));
        // if(now()->format('s')% 2){
        //     return $next($request);
        // }
        //return response(auth()->user());
        
        // if(auth()->user()){
        //     if(auth()->user()->name == 'faiez'){
        //         return $next($request);
        //     }
        // }   
        
        //$credentials = Admin::where('name',$request->input('name'))->first();  
        
        if (Auth::guard('admin')->user()) {
            return $next($request);
            }
        
        return redirect('/');
    }
}
