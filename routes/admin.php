<?php

use Illuminate\Support\Facades\Route;

route::get('/', function () {
    return view('admin.dashboard.index');
})->name('admin');
