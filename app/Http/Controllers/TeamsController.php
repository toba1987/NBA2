<?php

namespace App\Http\Controllers;

use App\Team;


class TeamsController extends Controller
{

	public function index()
	{
		$teams= Team::all();

		return view('teams.index',['teams' => $teams]);
	}//end


	public function show($id)
	{
		$team = Team::find($id);

		return view('teams.show',['team' => $team]);

	}//end


}//CLASS