<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AccountTypeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // get the connected  user 
        $user  = User::where("id", auth()->user()->id)->first();
        // allow  users  that have  organizer   role to   pass 
        if ($user && $user->type == "organizer") {
            return $next($request);
        }
        // otherwise  you gonna  be  redirected to the error  page
        return abort(403, "sir b7alek");
    }
}
