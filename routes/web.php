<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\SermonController;

Route::get('/', [PageController::class, 'index']);
Route::get('/contact',[PageController::class,'contact'])->name('contacts.index');
Route::get('/about', [PageController::class, 'about'])->name('about.index');

Route::get('/sermons', [SermonController::class, 'index'])->name('sermons');
Route::get('/sermons/{id}', [SermonController::class, 'show'])->name('sermons.show');
Route::get('/sermons/create', [SermonController::class, 'create'])->name('sermons.create');
Route::get('/sermons/{id}/edit', [SermonController::class, 'edit'])->name('sermons.edit');
Route::post('/sermons', [SermonController::class, 'store'])->name('sermons.store');
Route::put('/sermons/{id}', [SermonController::class, 'update'])->name('sermons.update');
Route::delete('/sermons/{id}', [SermonController::class, 'destroy'])->name('sermons.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
