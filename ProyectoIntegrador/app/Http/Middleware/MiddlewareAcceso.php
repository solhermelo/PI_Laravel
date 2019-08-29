<?php

namespace App\Http\Middleware;

use Closure;

class MiddlewareAcceso
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
      $user = auth()->user();
        if($user){
          return view('/buscoJugador');
        }else{
          return redirect('/login');
        }
        return $next($request);
    }
}
