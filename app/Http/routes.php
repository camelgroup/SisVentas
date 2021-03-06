<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Route::resource('almacen/categoria','CategoriaController');
Route::resource('almacen/articulo','ArticuloController');
Route::resource('ventas/cliente','ClienteController');
//Route::get('/{slug?}', 'ClienteController@index');
Route::resource('ventas/venta','VentaController');
Route::resource('nosotros/camel','CController');
Route::resource('acceso/usuario','UsuarioController');
Route::auth();

Route::get('/home', 'HomeController@index');
