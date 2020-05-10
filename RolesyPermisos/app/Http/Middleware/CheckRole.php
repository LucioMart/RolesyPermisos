<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if(! $request->user()->hasRole($role)) {
            return redirect('home');
        }
       /* if(!Auth::user()->hasRoles($roles)) {
            return redirect('/404');
        }  Multiples usuarios   */
        return $next($request);
    }

}
