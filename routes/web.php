<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Public routes
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/programs', [App\Http\Controllers\ProgramController::class, 'index'])->name('programs');
Route::get('/admission', [App\Http\Controllers\AdmissionController::class, 'index'])->name('admission');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::get('/apply', [App\Http\Controllers\ApplicationController::class, 'create'])->name('apply');
Route::post('/apply', [App\Http\Controllers\ApplicationController::class, 'store'])->name('apply.store');
Route::get('/status', [App\Http\Controllers\ApplicationController::class, 'checkStatus'])->name('status');
Route::post('/status', [App\Http\Controllers\ApplicationController::class, 'getStatus'])->name('status.check');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
