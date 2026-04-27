<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Login
Route::get('/', [PageController::class, 'showLogin'])->name('login');
Route::post('/login', [PageController::class, 'authenticate'])->name('authenticate');

// Halaman admin
Route::get('/dashboard',    [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/pengelolaan',  [PageController::class, 'pengelolaan'])->name('pengelolaan');
Route::get('/profile',      [PageController::class, 'profile'])->name('profile');

// Logout
Route::get('/logout', [PageController::class, 'logout'])->name('logout');
