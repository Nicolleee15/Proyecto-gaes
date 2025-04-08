<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\TiporepuestoController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\ModeloController;
use App\Http\Controllers\InventarioController;


Route::get('/', function () {
    return redirect('marca');
});

Route::get('tiporepuesto', function () {
    return view('tiporepuesto');
});

Route::get('color', function () {
    return view('color');
});

Route::get('proveedor', function () {
    return view('proveedor');
});

Route::get('reference', function () {
    return view('reference');
});

Route::get('modelo', function () {
    return view('modelo');
});

Route::resource('marca', MarcaController::class);
Route::resource('tiporepuesto', TiporepuestoController::class);
Route::resource('color', ColorController::class);
Route::resource('proveedor', ProveedorController::class);
Route::resource('reference', ReferenceController::class);
Route::resource('modelo', ModeloController::class);

Route::resource('inventario', InventarioController::class);

