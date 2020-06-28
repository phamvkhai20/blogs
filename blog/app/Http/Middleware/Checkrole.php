<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Checkrole
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
            if(Auth::user()->role == config('common.role.admin')){
                return $next($request);
            }
            return redirect()->route('website.index');
    }
}
