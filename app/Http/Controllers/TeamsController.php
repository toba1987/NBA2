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


	public function show($team_id)
	{
		$team = Team::find($team_id);

		return view('teams.show',['team' => $team]);

	}//end

	public function getTeamNews(Team $team)
	{
		$news = $team->news()->paginate(3);

		return view('news.index',compact('news'));
	}




}//CLASS