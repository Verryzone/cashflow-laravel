<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RootController;
use Illuminate\Support\Facades\Route;





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route::get('/', [RootController::class, 'index']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/admin', function () {
        return view('layout.app');
    });
});

Route::fallback(function () {
    return redirect('/admin');
});

require __DIR__.'/auth.php';
