<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/guide', function () {
    return view('guide.home');
})->name('guide');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', function () {
        return view('auth.profile');
    })->name('profile');

    Route::get('/dashboard', function () {
        return view('auth.dashboard');
    })->name('dashboard');

    Route::get('/book', function () {
        return view('booking.home');
    })->name('book');
});

Route::get('/admin_panel', function () {
    return view('admin_panel.home');
})->middleware(['auth', 'verified'])->name('admin_panel');

Route::get('login/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('login/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::get('/contact', [ProfileController::class, 'view_contact_form'])->name('contact');
Route::post('/contact', [ProfileController::class, 'update_contact'])->name('contact');
Route::get('/passport', [ProfileController::class, 'view_passport_form'])->name('passport');
Route::post('/passport', [ProfileController::class, 'update_passport'])->name('passport');

require __DIR__.'/auth.php';

