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

Route::get('/', function () {
    return view('inicio');
});

Route::get('productos/show', 'ProductoController@showAll');
Route::post('productos/show', 'CategoriaController@showFilter');




#Route::post('productos/categoria' , 'ProductoController@showCategoria');
Route::get('productos/add' , 'ProductoController@addProductoForm');
Route::post('productos/add' , 'ProductoController@addProducto');
#Route::get('productos/categoria/{id}', 'CategoriaController@showCategoria');

Route::get('productos/edit/{id}' , 'ProductoController@editProductoForm');
Route::post('productos/edit' , 'ProductoController@editProducto');

