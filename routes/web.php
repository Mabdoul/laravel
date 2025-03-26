<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;
use App\Services\Calcul;
use Illuminate\Http\Request;

use function Laravel\Prompts\text;

// Profilss
// Route::name('profiles.')->prefix('profiles')->group(function () {
//     Route::controller(ProfileController::class)->group(function () {
//         Route::get('/', 'index')->name('index');
//         Route::get('/create',  'create')->name('create');
//         Route::post('/',  'store')->name('store');
//         Route::delete('/{profile}',  'destroy')->name('destroy');
//         Route::get('/{profile}/edit',  'edit')->name('edit');
//         Route::put('/{profile}',  'update')->name('update');
//         Route::get('/{profile}',  'show')->where('profile', '\d+')->name('show');
//     });
// });
Route::resource('profiles',ProfileController::class);




// Accueil
Route::get('/', [HomeController::class, 'index'])
    ->middleware(Authenticate::class)
    ->name('homepage');
//Authentification
Route::get('/login', [LoginController::class, 'show'])->name('login.show');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');


// Paramètres
Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
Route::get('/somme/{a}/{b}', function ($a,$b,Calcul $calcul) {

    return $calcul->somme($a,$b);
});
Route::view('/form','form');
Route::post('/form',function(Request $request){
    //only
    //except
    $request->mergeIfMissing(['input_field'=>'hala hal lmgharba']);

    dd($request->input('input_field'));

})->name('form');
