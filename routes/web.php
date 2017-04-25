<?php

Route::get('/', function () {
    return view('spectral');
});

Route::get('/elements', function () {
    return view('elements');
});

Route::get('/generic', function () {
    return view('generic');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
