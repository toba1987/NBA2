<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class LoginControllers extends Controller
{
	public function destroy()
	{
		auth()->logout(); // ovo je laravelo 

    	return redirect('/');


	}//end

	public function create()
	{
		return view('login.create');
		
	}//end

	public function store() 
	{
		$this->validate(request(),[
    		'email' => 'required|email', 
    		'password' => 'required'
    	]);


		if(!auth()->attempt(request(['email','password']))) 
		{
			return back()->withErrors([
				'message' => 'Bad Credentials. Please try again'
			]);
		}//if

		return redirect('/');

	}//end

}//CLASS