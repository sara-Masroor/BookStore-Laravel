<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckIfUserIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $role=auth()->user()->role;
        if ($role != 'admin')
           // abort(404);
            abort(401, "UNAUTHORIZED");
//            return response("شما ادمین این وبسایت نیستید، بنابراین اجازه دسترسی به این بحش را ندارید!", 401);
        else
            return $next($request);
    }
}
