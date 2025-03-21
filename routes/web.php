<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('/login', [LoginController::class, 'show'])->name('login.show');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/profiles', [ProfileController::class, 'index'])->name('profiles.index');

Route::get('/profiles/create', [ProfileController::class, 'create'])->name('profiles.create');

Route::get('/profiles/{profile}', [ProfileController::class, 'show'])
->where('profile', '\d+')
->name('profiles.show');

Route::post('/profiles/store', [ProfileController::class, 'store'])->name('store');

Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
