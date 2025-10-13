<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\HomeController;

// Route for home page
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/message', [HomeController::class, 'store'])->name('message.store');

Route::get('/blog', function () {
    return view('blog.blog');
})->name('blog');

// --- ROUTES UNTUK DASHBOARD ---

// Menampilkan halaman utama dashboard (daftar pesan)
Route::get('/dashboard', [DashboardController::class, 'index'])
     ->middleware('auth')
     ->name('dashboard');

// [DIPERBAIKI] Route untuk menghapus pesan
Route::delete('/messages/{message}', [DashboardController::class, 'destroy'])
    ->middleware('auth')
     ->name('messages.destroy');

// Logout route - POST method
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout')->middleware('auth');

// Authenticated routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';