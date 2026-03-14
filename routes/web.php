<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use Illuminate\Foundation\Http\Middleware\SanitizeInput;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Http\Request;

RateLimiter::for('contact', function (Request $request) {
    return Limit::perMinute(3)->by($request->ip());
});

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([SanitizeInput::class, 'throttle:contact'])->post('/contact', [ContactController::class, 'store']);
