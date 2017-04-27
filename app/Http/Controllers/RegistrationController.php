<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{
    //
    public function create()
    {
    	return view('register');
    }

    public function store(Request $request)
    {

    	//validate
    	$this->validate(request(),[

    		'name' => 'required',

    		'email' => 'required|email',

    		'password' => 'required|confirmed',
    	]);
    	//create and save user
    	$user = User::create(request(['name', 'email', 'password']));
    	//sign in
    	//redirect
    	return view('/register');
    }
}
