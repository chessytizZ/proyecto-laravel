<?php

namespace App\Http\Middleware;

use Closure;

class Admin
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
        if(\Auth::user()->id != 1){
            dump('No tienes los permisos necesarios para realizar esta operación');
            return redirect('inicio');
        }
        return $next($request);
    }
}
