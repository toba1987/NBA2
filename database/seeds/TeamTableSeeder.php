<?php

use Illuminate\Database\Seeder;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $team = new \App\Team();
        $team->name = "Zvezda";
        $team->email = "zvezda@gmail.com";
        $team->address = "Brace Bosnka 65";
        $team->city = "Beograd";

        $team->save();

        
        $team = new \App\Team();
        $team->name = "Metalac";
        $team->email = "metalac@gmail.com";
        $team->address = "Jovana Ducica 32";
        $team->city = "Futog";

        $team->save();

        
        $team = new \App\Team();
        $team->name = "Vojvodina";
        $team->email = "vojvodina@gmail.com";
        $team->address = "Danila Kisa 28";
        $team->city = "Novi Sad";

        $team->save();
    }
}
