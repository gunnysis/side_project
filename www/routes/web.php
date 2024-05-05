<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RevelationController;
use App\Http\Controllers\SecretPostController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/revelation/account', [RevelationController::class, 'create'])->name('revelation.create');
    Route::post('/revelation/account/store', [RevelationController::class, 'store'])->name('revelation.store');
    Route::get('/revelation/post', [SecretPostController::class, 'index'])->name('secret_post.index');
    Route::get('/revelation/post/write', [SecretPostController::class, 'create'])->name('secret_post.create');
    Route::post('/revelation/post/store', [SecretPostController::class, 'store'])->name('secret_post.store');

});


require __DIR__.'/auth.php';
