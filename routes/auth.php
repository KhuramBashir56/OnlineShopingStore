<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('logout-all/{email}', [AuthenticatedSessionController::class, 'logoutAllSessions'])->name('logout_all');

Route::middleware(['auth', 'LoginOTP'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

// Route::get('verify-email', EmailVerificationPromptController::class)->name('verification.notice');
// Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)->middleware(['signed', 'throttle:6,1'])->name('verification.verify');
// Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])->middleware('throttle:6,1')->name('verification.send');
// Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])->name('password.confirm');
// Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);
// Route::put('password', [PasswordController::class, 'update'])->name('password.update');
