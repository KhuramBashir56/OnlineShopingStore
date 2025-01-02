<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::name('login.')->group(function () {
    Route::get('login-otp/{token}', [AuthenticatedSessionController::class, 'loginOtp'])->name('otp');
    Route::post('login-otp-verification', [AuthenticatedSessionController::class, 'otpVerification'])->name('otp_verification');
});
Route::middleware('guest')->group(function () {
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('login.store');
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store'])->name('register.store');
    Route::prefix('password')->name('password.')->group(function () {
        Route::get('forgot', [PasswordResetLinkController::class, 'create'])->name('request');
        Route::post('forgot', [PasswordResetLinkController::class, 'store'])->name('email');
        Route::get('reset/{token}', [NewPasswordController::class, 'create'])->name('reset');
        Route::post('reset', [NewPasswordController::class, 'store'])->name('store');
    });
});

// Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
// Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');
// Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
// Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.store');