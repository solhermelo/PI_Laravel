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
Route::get('/faq', 'FaqController@listado');
Route::get('/buscoJugador', 'BuscoJugadorController@buscar');
Route::get('/BuscoEquipo', 'BuscoEquipoController@buscar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
