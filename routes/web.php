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


Route::get('/', 'PostsController@index')->name('home');
Route::get('/index.html', 'PostsController@index');
Route::get('/elements', 'PostsController@elements');
Route::get('/generic', 'PostsController@generic');
Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');
Route::get('/login', 'SessionsController@create');
Route::post('/logout', 'SessionsController@destroy');
//$table->string('ip_address', 45); for storing ip addresses
//http://daipratt.co.uk/mysql-store-ip-address/
//http://stackoverflow.com/questions/6427786/ip-address-storing-in-mysql-database-using-php