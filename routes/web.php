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

Route::get('/', 'MainController@index');

Route::get('form','MainController@form');

Route::post('validation', 'MainController@validation');

Route::post('send','MainController@store');

Route::get('dashboard','AdminController@index');

Route::get('data','AdminController@data');

Route::get('detail/{id}','AdminController@detail');

Route::get('delete/{id}','AdminController@destroy');

Route::get('login','LoginController@index');

Route::post('validate','LoginController@login');

Route::get('logout','LoginController@logout');
