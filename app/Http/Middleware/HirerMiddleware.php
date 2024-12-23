<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class HirerMiddleware
{
    public function handle($request, Closure $next)
    {
        // Check if user is authenticated and is a hirer
        if (Auth::check() && Auth::user()->isHirer == 1) {
            return $next($request);
        }

        // Redirect to login page with error message if unauthorized
        return redirect()->route('otp.login')->with('error', 'Access denied. Only hirers can view this page.');
    }
}
