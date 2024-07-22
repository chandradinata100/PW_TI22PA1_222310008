<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

// Rute utama langsung ke halaman login
Route::get('/', function () {
    return redirect()->route('login.form');
});

// Rute untuk halaman login
Route::get('/login', [LoginController::class, 'login'])->name('login.form')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login')->middleware('guest');

// Rute untuk halaman register
Route::get('/register', [RegisterController::class, 'create'])->name('register.form')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('register')->middleware('guest');

// Rute untuk halaman home (setelah login berhasil)
Route::view('/home', 'home')->name('home')->middleware('auth');

// Rute untuk logout
Route::post('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout')->middleware('auth');
