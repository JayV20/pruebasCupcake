<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'index')->name('index');
Route::resource('bienvenido', 'BienvenidoController');
Route::resource('contactanos', 'ContactanosController');
Route::resource('conocenos', 'ConocenosController');
Route::resource('pedidos','PedidosController');
Route::resource('cliente','ClientesController');
Route::resource('direccion','DireccionController');
Route::resource('producto','ProductoController');
Route::resource('promociones','PromocionesController');
Route::resource('stock','StockController');
Route::resource('tickets','TicketsController');



/*
Route::get('/', function () {
    return view('index');
});
*/