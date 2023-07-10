<?php

use App\Http\Controllers\Admin\PangkatController;
use Illuminate\Support\Facades\Route;

route::get('/', function () {
    return view('admin.dashboard.index');
})->name('admin');


Route::resource('pangkat', PangkatController::class);
