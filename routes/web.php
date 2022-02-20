<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CekDaftarPemilihTetapController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KandidatController;
use App\Http\Controllers\LiveCountController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\VotingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/', [HomeController::class, 'index']);
Route::get('/voting', [VotingController::class, 'index']);
Route::get('/auth/login', [AuthController::class, 'login']);
Route::get('/auth/register', [AuthController::class, 'register']);
Route::get('/auth/register-success', [AuthController::class, 'registerSuccess']);
Route::get('/cek-daftar-pemilih-tetap', [CekDaftarPemilihTetapController::class, 'index']);
Route::get('/vote', [VoteController::class, 'index']);
Route::get('/live-count', [LiveCountController::class, 'index']);
Route::get('/kandidat', [KandidatController::class, 'index']);
