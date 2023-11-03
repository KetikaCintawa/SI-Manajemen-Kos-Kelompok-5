<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\LoginController;

Route::get('/coba', [CobaController::class, 'index']);
Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('/logout', [LoginController::class, 'actionlogout'])->name('actionlogout');


