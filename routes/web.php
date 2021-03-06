<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\VotingController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\KandidatController;
use App\Http\Controllers\SaranController;
use App\Models\Kandidat;
use App\Models\User;
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


// Auth::routes();

Route::get('/register', [AuthController::class, 'register'])->name('regis');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/auth', [AuthController::class, 'auth'])->name('auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/', [HomeController::class, 'index']);
Route::get('/voting', [VoteController::class, 'index'])->middleware('auth');
Route::patch('/voting', [VoteController::class, 'vote'])->middleware('auth')->name('vote');
Route::put('/saran', [SaranController::class, 'store'])->middleware('auth')->name('saran');
Route::prefix('/admin')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::resource('/mahasiswa', MahasiswaController::class);
    Route::get('/voting', [VotingController::class, 'index']);
    Route::get('/saran', [SaranController::class, 'index']);
    Route::resource('/kandidat', KandidatController::class);
});
