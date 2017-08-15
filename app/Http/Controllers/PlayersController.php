<?php

namespace App\Http\Controllers;

use App\Player;
use App\Team;



class PlayersController extends Controller
{

	public function show($id)
	{
		$player = Player::find($id);

		return view('players.show',['player' => $player]);
	}//end

}//CLASS