<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChirpController;

Route::view('/', 'welcome');

Route::get('chirps', [ChirpController::class, 'index'])
        ->middleware(['auth','verified'])
        ->name('chirps');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
