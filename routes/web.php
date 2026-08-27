<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CriaturaController;

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/criatura', [CriaturaController::class, 'obtenerEstado']);


