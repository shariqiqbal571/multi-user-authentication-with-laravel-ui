<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Genie
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->role_id === 4) {
            return $next($request);
        }

        return redirect('/login'); // Redirect to a suitable route for unauthorized users
        // return redirect()->route('career.genie.login'); // Redirect to a suitable route for unauthorized users
    }
}
