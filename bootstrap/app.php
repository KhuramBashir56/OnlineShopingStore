<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))->withRouting(
    web: __DIR__ . '/../routes/web.php',
    commands: __DIR__ . '/../routes/console.php',
    health: '/up',
    then: function () {
        Route::middleware(['web'])->group(base_path('routes/guest.php'));
        Route::middleware(['web'])->group(base_path('routes/auth.php'));
        Route::middleware(['web'])->prefix('admin')->name('admin.')->group(base_path('routes/admin.php'));
    }
)->withMiddleware(function (Middleware $middleware) {
    $middleware->alias([
        'LoginOTP' => \App\Http\Middleware\LoginOtpVerificationMiddleware::class,
    ]);
})->withExceptions(function (Exceptions $exceptions) {
    //
})->create();
