<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('guest')->group(function()
{
    Route::get('/register', function() {
        return view('auth.register');
    })->name('register');

    Route::get('/login', function() {
        return view('auth.login');
    })->name('login');
}
);
require __DIR__.'/auth.php';
