<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/metricas', function () {
    return view('Dashboard');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/registro', function () {
    return view('registro');
});
Route::get('/juegos', function () {
    return view('juegos');
});
Route::get('/empleado', function () {
    return view('empleado');
});
Route::get('/error_404', function () {
    return view('error_404');
});
Route::get('/error_500', function () {
    return view('error_500');
});
Route::get('/WhatsApp', function () {
    return view('WhatsApp');
});