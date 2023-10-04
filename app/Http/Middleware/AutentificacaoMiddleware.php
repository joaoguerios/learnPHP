<?php

namespace App\Http\Middleware;

use Closure;

class AutentificacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $metodo_autetificacao)
    {
        echo $metodo_autetificacao;
        if (true){
            return $next($request);
        }
        return Response('autentificacao middleware');
    }
}
