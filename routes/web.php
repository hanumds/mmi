<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HaiController;
 
Route::get('/postech/{nik}/{nama}/cek', [HaiController::class, 'index']);

Route::get('/dashboard', function () {
    return view('welcome');
});
