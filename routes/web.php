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

Route::get('/', 'BaseballController@top');
Route::get('/kojin', 'BaseballController@kojin');
Route::get('/kojin/show', 'BaseballController@show');
Route::get('/place', 'BaseballController@place');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
