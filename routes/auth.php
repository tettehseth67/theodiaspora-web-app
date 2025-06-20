<?php

use App\Http\Controllers\UserAuth\LoginController as UserLoginController;
use App\Http\Controllers\UserAuth\RegisterController as UserRegisterController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('login', [UserLoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [UserLoginController::class, 'login']);
    Route::get('register', [UserRegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [UserRegisterController::class, 'register']);
});

Route::post('logout', [UserLoginController::class, 'logout'])->name('logout');
