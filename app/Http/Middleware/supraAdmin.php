<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Contracts\Auth\Factory as Auth;

class supraAdmin
{
  protected $auth;

    /**
     * Create a new middleware instance.
     *
     * @param  \Illuminate\Contracts\Auth\Factory  $auth
     * @return void
     */
    // La función  __construct para autentifique el usuario que esta loqueando
    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // La función handle para indetificar el usuario loqueado, si el usuario es ==1 es el administrador de lo contrario va a salir el error 404
    public function handle($request, Closure $next)
    {  if($this->auth->user()->supraadmin()){
        return $next($request);
        }
        else{
            abort(404);
        }
    }

}
