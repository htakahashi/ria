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
    $table = DB::table('dynamic_words')->orderby('created_at', 'desc')->first();
    $header = $table->heading_text;
    $headline_1 = $table->headline_text_1;
    $headline_2 = $table->headline_text_2;
    $headline_3 = $table->headline_text_3;
    $button = $table->button_text;
    $action = $table->action_text;
    return view('spectral',['header'=>$header,
        'headline_1'=>$headline_1,
        'headline_2'=>$headline_2,
        'headline_3'=>$headline_3,
        'button'=>$button,
        'action'=>$action]);
});

Route::get('/elements', function () {
    return view('elements');
});


Route::get('/generic', function () {
    return view('generic');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', 'Auth\LoginController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('admin', ['middleware' => ['auth', 'admin'], function() {
    $table = DB::table('dynamic_words')->orderby('created_at', 'desc')->first();
    $header = $table->heading_text;
    $headline_1 = $table->headline_text_1;
    $headline_2 = $table->headline_text_2;
    $headline_3 = $table->headline_text_3;
    $button = $table->button_text;
    $action = $table->action_text;
    return view("admin",['header'=>$header,
        'headline_1'=>$headline_1,
        'headline_2'=>$headline_2,
        'headline_3'=>$headline_3,
        'button'=>$button,
        'action'=>$action]);
}]);

Route::post('admin/update', 'AdminController@update');
