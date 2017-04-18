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
    return view('spectral');
});

Route::get('/elements', function () {
    return view('elements');
})->middleware('auth');


Route::get('/generic', function () {
    return view('generic');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('auth');



