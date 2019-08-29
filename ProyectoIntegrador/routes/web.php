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

Route::get('/', 'InicioController@inicio');
Route::get('/buscoJugador', 'BuscoJugadorController@buscar');
Route::post('/buscoJugador', 'BuscoJugadorController@agregar');
Route::get('/exitoBuscoJugador', 'ExitoBuscoJugadorController@mensaje');
Route::get('/buscoEquipo', 'BuscoEquipoController@listado');
Route::get('/exitoBuscoEquipo', 'ExitoBuscoEquipoController@unirme');
Route::get('/faq', 'FaqController@listado');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
