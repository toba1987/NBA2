<?php

namespace App\Http\Controllers;

use App\Team;


class TeamsController extends Controller
{
	public function __construct() 
	{
		$this->middleware('auth'); 
	}//end

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

	public function getTeamNews(Team $teams)
	{
		$news = $team->news()->paginate(3);

		return view('news.index',compact('news'));
	}




}//CLASS