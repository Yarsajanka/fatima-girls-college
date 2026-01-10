<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Public routes
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/programs', [App\Http\Controllers\ProgramController::class, 'index'])->name('programs');
Route::get('/admission', [App\Http\Controllers\AdmissionController::class, 'index'])->name('admission');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'send'])->name('contact.send');
Route::get('/apply', [App\Http\Controllers\ApplicationController::class, 'create'])->name('apply');
Route::post('/apply', [App\Http\Controllers\ApplicationController::class, 'store'])->name('apply.store');
Route::get('/status', [App\Http\Controllers\ApplicationController::class, 'checkStatus'])->name('status');
Route::post('/status', [App\Http\Controllers\ApplicationController::class, 'getStatus'])->name('status.check');

// Admin routes
Route::get('/admin', function () {
    if (auth()->check() && auth()->user()->isAdmin()) {
        return redirect()->route('admin.dashboard');
    }
    return redirect()->route('login');
})->name('admin');

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');

    // Programs
    Route::get('/programs', [App\Http\Controllers\AdminController::class, 'programs'])->name('programs');
    Route::get('/programs/create', [App\Http\Controllers\AdminController::class, 'createProgram'])->name('programs.create');
    Route::post('/programs', [App\Http\Controllers\AdminController::class, 'storeProgram'])->name('programs.store');
    Route::get('/programs/{program}/edit', [App\Http\Controllers\AdminController::class, 'editProgram'])->name('programs.edit');
    Route::put('/programs/{program}', [App\Http\Controllers\AdminController::class, 'updateProgram'])->name('programs.update');
    Route::delete('/programs/{program}', [App\Http\Controllers\AdminController::class, 'destroyProgram'])->name('programs.destroy');

    // Admissions
    Route::post('/admissions/toggle', [App\Http\Controllers\AdminController::class, 'toggleAdmissions'])->name('admissions.toggle');

    // Applicants
    Route::get('/applicants', [App\Http\Controllers\AdminController::class, 'applicants'])->name('applicants');
    Route::get('/applicants/{application}', [App\Http\Controllers\AdminController::class, 'showApplicant'])->name('applicants.show');
    Route::put('/applicants/{application}/status', [App\Http\Controllers\AdminController::class, 'updateApplicantStatus'])->name('applicants.update-status');
    Route::post('/applicants/download-pdf', [App\Http\Controllers\AdminController::class, 'downloadSelectedApplicantsPdf'])->name('applicants.download-pdf');
    Route::post('/applicants/upload-selected-pdf', [App\Http\Controllers\AdminController::class, 'uploadSelectedCandidatesPdf'])->name('applicants.upload-selected-pdf');

    // Announcements
    Route::get('/announcements', [App\Http\Controllers\AdminController::class, 'announcements'])->name('announcements');
    Route::get('/announcements/create', [App\Http\Controllers\AdminController::class, 'createAnnouncement'])->name('announcements.create');
    Route::post('/announcements', [App\Http\Controllers\AdminController::class, 'storeAnnouncement'])->name('announcements.store');
    Route::get('/announcements/{announcement}/edit', [App\Http\Controllers\AdminController::class, 'editAnnouncement'])->name('announcements.edit');
    Route::put('/announcements/{announcement}', [App\Http\Controllers\AdminController::class, 'updateAnnouncement'])->name('announcements.update');
    Route::delete('/announcements/{announcement}', [App\Http\Controllers\AdminController::class, 'destroyAnnouncement'])->name('announcements.destroy');

    // Gallery
    Route::get('/gallery', [App\Http\Controllers\AdminController::class, 'gallery'])->name('gallery');
    Route::post('/gallery', [App\Http\Controllers\AdminController::class, 'storeGallery'])->name('gallery.store');
    Route::delete('/gallery/{gallery}', [App\Http\Controllers\AdminController::class, 'destroyGallery'])->name('gallery.destroy');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
