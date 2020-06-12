<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class InstrumentoPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $instrumento)
    {
        if(in_array($instrumento, Auth::User()->role->instrumentos)){
            //tem permissão
            return $next($request);
        }
        return redirect('/inicioInstrumentos');        
    }
}
