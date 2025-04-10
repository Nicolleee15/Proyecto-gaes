<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VentasController;

// Ruta principal que redirige al index del controlador
Route::get('/', [ClienteController::class, 'index']);

// Ruta para todos los recursos del controlador (index, create, store, etc)
Route::resource('clientes', ClienteController::class);
Route::resource('ventas', VentasController::class);