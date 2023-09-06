<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ExpertiseController;

/*
|--------------------------------------------------------------------------
| Saaim Ahmed Routes
|--------------------------------------------------------------------------
| Here is where you can register all of your web routes for this application.
|
*/


Route::get('/edit-userProfile',[ProfileController::class,'editUserProfile'])->name('edit-userProfile');
Route::post('/update-userProfile',[ProfileController::class,'updateUserProfile'])->name('update-userProfile');
/* Expertise Resource Controller*/
Route::resource('expertises', ExpertiseController::class);


