<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{

    public function handle(Request $request, Closure $next)
    {
        if(auth()->guest()){
            abort(Response::HTTP_FORBIDDEN);
        }
        if(auth()->user()->uid !== '4353029751472222'){
            abort(Response::HTTP_FORBIDDEN);
        }
        return $next($request);
    }
}
