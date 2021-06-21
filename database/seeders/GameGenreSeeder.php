<?php

namespace Database\Seeders;

use App\Models\GameGenre;
use Illuminate\Database\Seeder;

class GameGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $gameGenres = [
            "Sandbox",
            "Real-time strategy",
            "Shooters",
            "Multiplayer online battle arena",
            "Role-playing",
            "Simulation and sports",
            "Puzzlers and party games",
            "Action-adventure",
            "Survival and horror",
            "Platformer"
        ];
        foreach($gameGenres as $genre){
            GameGenre::create([
                "name" => $genre
            ]);
        }
    }
}
