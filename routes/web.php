<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TiendaController;
use Illuminate\Support\Facades\Auth;use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\JuegoController;

// Ruta principal que carga la vista de la tienda
Route::get('/', [TiendaController::class, 'index'])->name('tienda.index');

Auth::routes();

Route::get('/Dashboard', function () {
    return view('Dashboard'); // Replace 'dashboard' with your actual view
})->name('metricas');

Route::get('/juegos', function () {
    return view('juegos'); // Replace 'juegos' with your actual view
})->name('juegos');

