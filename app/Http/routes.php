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
Route::post('/usuario/search', 'UsuarioController@search');
Route::post('/produto/search', 'ProdutoController@search');
Route::post('/categoria/search', 'CategoriaController@search');
Route::resource('/', 'UsuarioController');
Route::resource('/usuario', 'UsuarioController');
Route::resource('maps', 'MapsController');
Route::resource('/produto', 'ProdutoController');
Route::resource('/categoria', 'CategoriaController');
Route::resource('/estado', 'EstadoController');
Route::resource('/post', 'PostController');
