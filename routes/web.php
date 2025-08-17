<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

// Route to show welcome page
Route::get('/', function () {
    return view('welcome');
});

// Route for home page
Route::get('/home', function () {
    return view('home');
});

// Route for dashboard page (auth middleware ensures only authenticated users can access)
Route::get('/dashboard', function () {
    return view('layouts.dashboard');
})->middleware('auth')->name('dashboard'); 

// Logout route - POST method
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout')->middleware('auth');

// Authenticated routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
