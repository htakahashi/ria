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
});


Route::get('/generic', function () {
    return view('generic');
});

Route::get('/log', function () {
    return view('log');
});


// Route::get('/sendEmail', 'Controller@sendMail');


// Route::get('/send_test_email', function(){
// 	Mail::raw('Sending emails with Mailgun and Laravel is easy!', function($message)
// 	{
// 		$message->subject('Mailgun and Laravel are awesome!');
// 		$message->from('aaronwilson@aaronwilsonphoto.com', 'aaronwilsonphoto.com');
// 		$message->to('aaronwilsonphotography@gmail.com');
// 	});
// });
Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
