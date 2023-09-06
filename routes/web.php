<?php

use App\Http\Controllers\GeneralController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpertiseController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Services
Route::resource('services', ServiceController::class);




Route::middleware('maintenance')->group(function (){

});
Route::controller(FrontController::class)->group(function (){
    Route::get('/', 'home')->name('home');
    Route::get('/front', 'front')->name('front');
});

Route::controller(GeneralController::class)->group(function (){

    Route::middleware(['auth', 'maintenance'])->group(function (){
        Route::get('/dashboard',  'dashboard')->name('dashboard');
        Route::post('/logout',  'logout')->name('logout');

        Route::middleware('super_admin')->group(function (){
            Route::get('/site-data',  'siteData')->name('site.data');
            Route::post('/site-data',  'siteDataSubmit')->name('site.data');
            Route::post('/site-status',  'siteStatus')->name('site.status');
            Route::get('/catch-clear', 'clear')->name('catch.clear');
            Route::get('/serve', 'serve')->name('serve');
            Route::get('/migrate', 'migrate')->name('migrate');
        });
    });

    Route::middleware('not_auth')->group(function (){
        Route::get('/login',  'login')->name('login');
        Route::get('/register',  'register')->name('register');
        Route::post('/login',  'userLogin')->name('login');
        Route::post('/register',  'userRegister')->name('register');
    });
});
Route::get('/maintenance', [GeneralController::class, 'maintenance'])->middleware('active')->name('maintenance');


