<?php

namespace App\Http\Middleware;

use Closure;
use App\UsuPermitido;

class UsuPermitidosMiddleware
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

        if(UsuPermitido::where('nombreUsu',$request->input('nombreusu'))->first()->hasPermiso) {
            return $next($request);
        }

        return redirect('nopermitido');
    }
}
