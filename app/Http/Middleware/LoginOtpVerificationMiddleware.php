<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class LoginOtpVerificationMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->login_oto_token && !Auth::user()->login_otp_expired_at->isPast()) {
            return redirect()->route('login.otp', ['token' => Auth::user()->login_otp_token]);
        }
        return $next($request);
    }
}
