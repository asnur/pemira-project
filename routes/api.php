<?php

use App\Http\Controllers\RegisFromNimController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/checkNim', [RegisFromNimController::class, 'check'])->name('check-nim');
Route::post('/login', [RegisFromNimController::class, 'login'])->name('login');
Route::post('/regis', [RegisFromNimController::class, 'regis'])->name('regis');
