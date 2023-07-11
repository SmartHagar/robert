<?php

use Illuminate\Support\Facades\Route;

Route::get('pimpinan', function () {
    return view('pimpinan.dashboard.index');
});
