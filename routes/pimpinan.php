<?php

use App\Http\Controllers\Pimpinan\AbsensiController;
use App\Http\Controllers\Pimpinan\HonorerController;
use App\Http\Controllers\Pimpinan\PegawaiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pimpinan.dashboard.index');
})->name('pimpinan');


Route::prefix('laporan')->group(function () {
    Route::controller(PegawaiController::class)->group(function () {
        Route::get('/pegawai', 'index')->name('pegawai.pimpinan.index');
    });
    Route::controller(HonorerController::class)->group(function () {
        Route::get('/honorer', 'index')->name('honorer.pimpinan.index');
    });
    Route::controller(AbsensiController::class)->group(function () {
        Route::get('/absensi', 'index')->name('absensi.pimpinan.index');
    });
});
