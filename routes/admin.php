<?php

use App\Http\Controllers\Admin\AbsensiController;
use App\Http\Controllers\Admin\HonorerController;
use App\Http\Controllers\Admin\JabatanController;
use App\Http\Controllers\Admin\PangkatController;
use App\Http\Controllers\Admin\PegawaiController;
use App\Http\Controllers\Admin\PersonalController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:admin'])->group(function () {
    route::get('/', function () {
        return view('admin.dashboard.index');
    })->name('admin');


    Route::resource('pangkat', PangkatController::class);
    Route::resource('jabatan', JabatanController::class);
    Route::resource('personal', PersonalController::class);
    Route::resource('honorer', HonorerController::class);
    Route::resource('pegawai', PegawaiController::class);
    Route::resource('absensi', AbsensiController::class);
});
