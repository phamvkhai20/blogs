<?php

namespace App\Http\Middleware;
use Closure;
use Auth;
class CheckActive
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
        if(Auth::check()){
            if(Auth::user()->status == config('common.is_active.khoa')){
                auth::logout();
                return redirect()->route('NotificationActive');
            }
        }
        
        return $next($request);
        
    }
}
