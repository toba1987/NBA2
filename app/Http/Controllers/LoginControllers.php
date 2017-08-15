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

}//CLASS