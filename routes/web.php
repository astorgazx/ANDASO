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



