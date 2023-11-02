<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\VolunteerController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::group([
    'middleware' => 'api'
], function ($router) {
    Route::controller(AuthController::class)->group(function () {
        Route::post('login', 'login');
        Route::post('register', 'register');
        Route::post('logout', 'logout');
        Route::post('refresh', 'refresh');
        Route::post('user-profile', 'userProfile');
    });
    Route::controller(ContactusController::class)->group(function () {
        Route::post('/contact/store', 'store');
    });
    Route::controller(VolunteerController::class)->group(function () {
        Route::post('/volunteer/signup', 'join');
    });
    Route::controller(StateController::class)->group(function () {
        Route::get('/state/list', 'getState');
        Route::get('/city/list/{id}', 'getCity');
    });
    
});

