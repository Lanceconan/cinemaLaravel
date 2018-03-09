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

/*llamada a controlador de prueba con un simple mensaje en la web*/
//Route::get('controlador','PruebaController@index');

/*Llamada al controlador con parametros*/
//Route::get('name/{nombre?}','PruebaController@nombre');

/*Controlador con multiples acciones*/
//Route::resource('movie', 'MovieController');

/*una prueba de la ruta*/
//Route::get('prueba', function(){
//	return "Hola desde la ruta";
//});

/*ruta con nombre y apellido*/
//Route::get('nombre/{nombre}/{apellido}', function($nombre, $apellido){
//
//	return "Mi nombre es: ".$nombre." ".$apellido;
//});

/*edad por default*/
//Route::get('edad/{edad?}', function($edad = 28){
//	return "Yo tengo : ".$edad." años Cumplidos";
//});

/*ruta de home default*/
//7Route::get('/', function () {
//    return view('welcome');
//});

/**************************************** RUTAS QUE SE UTILIZARÁN ********************************************************/

/*Controller Front*/
Route::get('/', 'FrontController@index');
Route::get('contacto', 'FrontController@contacto');
Route::get('reviews', 'FrontController@reviews');
Route::get('admin', 'FrontController@admin');

/*Controller Usuario / es restFul*/
Route::resource('genero', 'GenreController');
Route::resource('usuario', 'UsuarioController');

Route::resource('log', 'LogController');
Route::get('logout', 'LogController@logout');