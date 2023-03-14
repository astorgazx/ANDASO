<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',function() {
    return view('index');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/productos', 'App\Http\Controllers\Productos@index');

Route::get("/clientes", "App\Http\Controllers\ClienteController@index");

Route::get("/proveedores", "App\Http\Controllers\ProveedorController@index");

Route::get("/empleados", "App\Http\Controllers\EmpleadoController@index");

Route::get("/facturas", "App\Http\Controllers\FacturaController@index");

Route::prefix('Empleados')->as('Empleados.')->group(function () { // Esta línea es la que se encarga de decirle a Laravel que prefijo debe usar
    Route::get('home', 'App\Http\Controllers\Home\EmpleadosHomeController@index')->name('home'); // Esta línea es la que se encarga de decirle a Laravel que ruta debe usar

    Route::namespace('App\Http\Controllers\Auth\Login')->group(function () { // Esta línea es la que se encarga de decirle a Laravel que namespace debe usar
        Route::get('login', 'EmpleadosLoginController@showLoginForm')->name('login'); // Esta línea es la que se encarga de decirle a Laravel que ruta debe usar
        Route::post('login', 'EmpleadosLoginController@login')->name('login.submit');
        Route::post('logout', 'EmpleadosLoginController@logout')->name('logout');
    });
});





