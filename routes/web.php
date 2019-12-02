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

Auth::routes();

Route::resource('item', 'ProductController');

Route::group(['middleware' => 'auth'], function() {
	Route::resource('item', 'ProductController', ['except' => ['show', 'index']]);
});




Route::get('/home', 'HomeController@index')->name('home');

Route::get('/item', 'ProductController@index')->name('item');

Route::post('/itemupdate/{id}', 'ProductController@edit');

Route::get('/erase/{id}', 'ProductController@destroy');

Route::get('/change/{id}', 'ProductController@update');

Route::get('/update', 'ProductController@index');