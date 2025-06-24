<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\SermonController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\DonationController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\AdminAuth\LoginController as AdminLoginController;
use App\Http\Controllers\AdminAuth\RegisterController as AdminRegisterController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\MinistryController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\UserAuth\LoginController as UserLoginController;
use App\Http\Controllers\UserAuth\RegisterController as UserRegisterController;

/**
 * Frontend Home
 */
Route::get('/', [FrontendController::class, 'index'])->name('home');


/**
 * Admin Auth (only for non‑logged‑in admins)
 */
Route::prefix('admin')->name('admin.')->middleware('guest:admin')->group(function () {
    Route::get('login',    [AdminLoginController::class, 'showLoginForm'])->name('login');
    Route::post('login',   [AdminLoginController::class, 'login']);
    Route::get('register', [AdminRegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [AdminRegisterController::class, 'register']);
});


/**
 * Admin Dashboard & CRUD (only for logged‑in admins)
 */
Route::prefix('admin')->name('admin.')->middleware('auth:admin')->group(function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::post('logout',   [AdminLoginController::class, 'logout'])->name('logout');

    // Sermons
    Route::resource('sermons', SermonController::class);

    Route::resource('donations', DonationController::class);
    // Events
    Route::resource('events', EventController::class);
    // Members
    Route::resource('members', MemberController::class);

    Route::resource('ministries', MinistryController::class);

    Route::resource('users', UserController::class);

    Route::get('settings', [SettingsController::class, 'index'])->name('settings.index');

    Route::resource('testimonials', TestimonialController::class);

});


/**
 * User Auth (only for non‑logged‑in users)
 */
Route::middleware('guest:web')->group(function () {
    Route::get('login',    [UserLoginController::class, 'showLoginForm'])->name('login');
    Route::post('login',   [UserLoginController::class, 'login']);
    Route::get('register', [UserRegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [UserRegisterController::class, 'register']);
});


/**
 * User Dashboard & Logout (only for logged‑in users)
 */
Route::prefix('user')->name('user.')->middleware('auth:web')->group(function () {
    Route::get('dashboard', [UserController::class, 'index'])->name('dashboard');
    Route::post('logout',   [UserLoginController::class, 'logout'])->name('logout');
});
