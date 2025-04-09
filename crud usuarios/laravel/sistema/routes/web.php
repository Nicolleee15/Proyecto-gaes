<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\Auth\LoginController;

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');



Route::get('/', function () {
    return view('auth.login');
});


/*Route::get('/empleado', function () {
    return view('empleado.index');
});

Route::get('/empleado/create', [EmpleadoController::class, 'create']);
*/

Auth::routes();

Auth::routes(['register'=>false, 'reset'=>false]);


Route::get('/home', [EmpleadoController::class, 'index'])->name('home');


/*Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/
Route::resource('empleado', EmpleadoController::class);



Route::group(['middleware'=>'auth'], function(){
    Route::get('/', [EmpleadoController::class, 'index'])->name('home');
});



Route::get('/ventas', function () {
    return view('vendedor.ventas'); // vista para vendedor
})->name('vendedor.ventas');

Route::get('/inventario', function () {
    return view('auxiliar.inventario'); // vista para auxiliar
})->name('auxiliar.inventario');

