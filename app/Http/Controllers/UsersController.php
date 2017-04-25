<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index () {
    	$users = User::paginate(20);
    	return view('users', compact('users'));

/*
    	$users = [
    		'0' => [
    			'name' => 'Chris',
    			'email' => 'ChrisCundick@hotmail.com'
    		],
    		'1' => [
    			'name' => 'Bob',
    			'email' => 'BobBobberson@hotmail.com'
    		]
    	];
    	return view('generic', compact('users'));

*/
    }
}
