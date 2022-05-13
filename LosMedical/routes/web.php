<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/doctorinfo/{doctor}', [PagesController::class,'doctorInfo']);
Route::get('/doctors/{lang?}', [PagesController::class,'doctors']);
Route::get('/contacts/{lang?}', [PagesController::class,'contacts']);

Route::post('/callform', [MainController::class,'callform']);
Route::get('/{lang?}', [PagesController::class,'main']);



