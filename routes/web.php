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
    return view('welcome');
});



Route::get('/onepiece', "luffyController@index" );




Route::get('/exotheme', "themeController@index" );




Route::get('services','PageController@service');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
