<?php

use App\Http\Controllers\HonorerController;
use App\Http\Controllers\PegawaiController;
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

Route::get('/', [DashboardController::class, 'index'])->name('user');
Route::get('honorer', [HonorerController::class, 'index'])->name('user.honorer');
Route::get('pegawai', [PegawaiController::class, 'index'])->name('user.pegawai');


Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/logout', 'logout')->name('logout');
});
