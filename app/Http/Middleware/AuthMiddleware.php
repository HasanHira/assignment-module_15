<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       $email = $request->email;
       $password = $request->password;

       if($email == "hasanhira.me@gmail.com" && $password == "xyz123"){

           return $next($request);
       }else {
        return response()->json("Unauthorized", 401);
       }
    }
}
