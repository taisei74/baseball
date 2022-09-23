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

Route::get('/', 'ProfileController@top');
Route::get('/kojin', 'ProfileController@kojin');
Route::get('/kojin/{profile}', 'ProfileController@show');
Route::get('/basho', 'PlaceController@basho');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
