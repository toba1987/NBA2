<?php

use Illuminate\Database\Seeder;

class PlayerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$player = new \App\Player();
        $player->first_name = "Milos";
        $player->last_name = "Milosevic";
        $player->email = "milos@gmail.com";
        $player->team_id = "1";

        $player->save();


        $player = new \App\Player();
        $player->first_name = "Darko";
        $player->last_name = "Drazic";
        $player->email = "darko@gmail.com";
        $player->team_id = "2";

        $player->save();


        $player = new \App\Player();
        $player->first_name = "Nikola";
        $player->last_name = "nikolic";
        $player->email = "nikola@gmail.com";
        $player->team_id = "3";

        $player->save();

    }
}
