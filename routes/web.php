<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('tienda.index');
});
Auth::routes();

Route::get('/tienda', [HomeController::class, 'tienda.index']);
Route::post('/tienda', [HomeController::class, 'tienda.index']);

Route::get('login', [LoginController::class,'login'])->name('login');
Route::post('login', [LoginController::class,'login']);
Route::get('logout', [LoginController::class,'logout'])->name('logout');

Route::get('register', [RegisterController::class,'register'])->name('register');
Route::post('register', [RegisterController::class,'register']);
Route::get('logout', [RegisterController::class,'logout'])->name('logout');


