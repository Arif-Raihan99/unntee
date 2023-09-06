<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpertiseController;


/*
|--------------------------------------------------------------------------
| Saaim Ahmed Routes
|--------------------------------------------------------------------------
| Here is where you can register all of your web routes for this application.
|
*/


Route::controller(ProfileController::class)->prefix('profile')->group(function (){
    Route::get('/edit','edit')->name('profile.edit');
    Route::get('/{id?}','profile')->name('profile');
    Route::post('/update','update')->name('profile.update');
});

Route::resource('expertises', ExpertiseController::class);


