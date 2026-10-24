<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KendaraanController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('kendaraan', KendaraanController::class);
