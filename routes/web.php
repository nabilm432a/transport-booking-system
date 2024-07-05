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

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/guide', function () {
    return view('guide.home');
})->name('guide');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', function () {
        return view('auth.profile');
    })->name('profile');

    Route::get('dashboard',[\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

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

Route::resource('transports',\App\Http\Controllers\TransportController::class);
Route::resource('notices',\App\Http\Controllers\NoticeController::class);
Route::resource('records',\App\Http\Controllers\RecordController::class);
Route::resource('routes',\App\Http\Controllers\RouteController::class);
Route::resource('locations',\App\Http\Controllers\LocationController::class);

require __DIR__.'/auth.php';

