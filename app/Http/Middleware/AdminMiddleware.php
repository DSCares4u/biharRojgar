<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->isAdmin == 1) {
            return $next($request);
        }

        Auth::logout();
        return redirect()->route('admin.login')->withErrors(['email' => 'Access denied. Admins only.']);
    }
}
