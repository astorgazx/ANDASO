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

// Rutas para agregar un producto
Route::get('/productos/add', 'App\Http\Controllers\Productos@showRegistroProducto');
Route::post('/productos/add', 'App\Http\Controllers\Productos@add') -> name('productos.add');

// Rutas para ver un producto
Route::get('/productos/{id}', 'App\Http\Controllers\Productos@showProducto');


//Rutas para Administrador para gestionar productos
Route::get('/admin/productos', 'App\Http\Controllers\Productos@index') -> name('admin.productos');
Route::get('/admin/productos/add', 'App\Http\Controllers\Productos@showRegistroProducto');
Route::post('/admin/productos/add', 'App\Http\Controllers\Productos@add') -> name('admin.productos.add');
Route::get('/admin/productos/{id}', 'App\Http\Controllers\Productos@showProducto') -> name('admin.productos.show');
Route::get('/admin/productos/edit/{id}', 'App\Http\Controllers\Productos@showEditProducto');
Route::post('/admin/productos/edit/{id}', 'App\Http\Controllers\Productos@edit') -> name('admin.productos.edit');
Route::get('/admin/productos/delete/{id}', 'App\Http\Controllers\Productos@delete');

//Rutas para Administrador para gestionar Proveedores
Route::get('/admin/proveedores', 'App\Http\Controllers\ProveedorController@index') -> name('admin.proveedores');
Route::get('/admin/proveedores/add', 'App\Http\Controllers\ProveedorController@showRegistroProveedor');
Route::post('/admin/proveedores/add', 'App\Http\Controllers\ProveedorController@add') -> name('admin.proveedores.add');
Route::get('/admin/proveedores/{id}', 'App\Http\Controllers\ProveedorController@showProveedor') -> name('admin.proveedores.show');
Route::get('/admin/proveedores/edit/{id}', 'App\Http\Controllers\ProveedorController@showEditProveedor');
Route::post('/admin/proveedores/edit/{id}', 'App\Http\Controllers\ProveedorController@edit') -> name('admin.proveedores.edit');
Route::get('/admin/proveedores/delete/{id}', 'App\Http\Controllers\ProveedorController@delete') -> name('admin.proveedores.delete');




