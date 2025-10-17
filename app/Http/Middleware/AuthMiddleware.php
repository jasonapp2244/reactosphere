<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */


   public function handle(Request $request, Closure $next)
{
    if (!Auth::check()) {
        return redirect('/')->with('error', 'Please login first!');
    }

    $user = Auth::user();
    $currentRoute = $request->route()->getName();

    if ($user->role === 'Admin') {
        if (!str_starts_with($currentRoute, 'admin.')) {
            return redirect()->route('admin.dashboard')->with('error', 'Access denied!');
        }
    } elseif ($user->role === 'User') {
        if (!str_starts_with($currentRoute, 'user.')) {
            return redirect()->route('user.Dashboard')->with('error', 'Access denied!');
        }
    } else {
        Auth::logout();
        return redirect()->route('user.signin')->with('error', 'Invalid role!');
    }

    return $next($request);
}

}
