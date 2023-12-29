<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                if (Auth::user()->role_id === 1) {
                    return redirect()->route('admin.dashboard');
                } elseif (Auth::user()->role_id === 2) {
                    return redirect()->route('member.dashboard');
                } elseif (Auth::user()->role_id === 4) {
                    return redirect()->route('genie.dashboard');
                } elseif (Auth::user()->role_id === 3) {
                    return redirect()->route('guru.dashboard');
                }
            }
        }

        return $next($request);
    }
}
