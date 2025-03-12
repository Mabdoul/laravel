<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\settingsController;
use Illuminate\Support\Facades\Route;

Route::get('/',[homeController::class,'index'])->name('homepage');
Route::get('/profiles',[profileController::class,'index'])->name('profiles.index');
Route::get('/profiles/{id}',[profileController::class,'show'])->name('profiles.show');
Route::get('/settings',[settingsController::class,'index'])->name('settings.index');
;
