<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\MenusController;
use Session;
use Illuminate\Support\Facades\View;

class GetVariables
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
        
        return $next($request);
    }
}
