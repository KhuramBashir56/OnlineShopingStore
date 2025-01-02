<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\Auth\LoginAlert;
use App\Mail\Auth\LoginOtp;
use App\Models\Activity;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    public function create(): View
    {
        return view('guest.login');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'email', 'exists:users,email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
            $otp = random_int(100000, 999999);
            $otpToken = Str::upper(Str::random(64));
            $user->login_otp = $otp;
            $user->login_otp_token = $otpToken;
            $user->login_otp_expired_at = now()->addMinutes(5);
            $user->update();
            Mail::to($user->email)->send(new LoginOtp($otp, $otpToken, now()->addMinutes(5)));
            Auth::logout();
            return redirect()->route('login.otp', ['token' => $otpToken]);
        }
        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    public function loginOtp(string $token): View
    {
        return view('guest.login-otp', ['token' => $token]);
    }

    public function otpVerification(Request $request): RedirectResponse
    {
        $request->validate([
            'otp' => ['required', 'numeric', 'digits:6', 'exists:users,login_otp'],
            'token' => ['required', 'exists:users,login_otp_token'],
        ]);
        $user = User::where('login_otp', $request->otp)->where('login_otp_token', $request->token)->where('login_otp_expired_at', '>=', now())->first();
        if ($user->login_otp_expired_at->isPast()) {
            return back()->withErrors(['otp' => 'OTP has expired.']);
        }
        if (!$user) {
            return back()->withErrors(['otp' => 'Invalid or expired OTP.']);
        }
        DB::transaction(function () use ($user) {
            $user->login_otp = null;
            $user->login_otp_token = null;
            $user->login_otp_expired_at = null;
            $user->update();
            Activity::Log('Login OTP Verification', $user->id, 'update', NULL);
            Mail::to($user->email)->send(new LoginAlert());
        });
        Auth::login($user);
        return redirect()->route('dashboard');
    }

    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
