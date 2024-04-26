<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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
Route::group(['middleware'=>['web']], function(){

    Route::get('/',[LoginController::class,'index'])->name('/');
    Route::get('/registration',[LoginController::class,'showRegistration'])->name('registration');
    Route::post('/registrationStore',[LoginController::class,'storeData'])->name('store');
    Route::post('/loginAttemp',[LoginController::class,'login'])->name('loginAttempt');

    Route::middleware(['auth'])->group(function() {
        
        Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
        Route::get('/profile',[DashboardController::class,'profile'])->name('profile');
        Route::get('/logout',[LoginController::class,'logout'])->name('logout');

    });

});
