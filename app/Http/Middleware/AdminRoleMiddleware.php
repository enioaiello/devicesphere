<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminRoleMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }

        // Redirige vers une page d'erreur ou une autre route si l'utilisateur n'est pas admin
        return redirect('/')->with('error', 'Vous n\'avez pas accès à cette page.');
    }
}
