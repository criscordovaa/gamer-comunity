<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;
use Faker\Factory;

class ConsoleGameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $microsoft = [1, 2, 3, 4, 5];
        $sony = [6, 7, 8, 9, 10, 11, 12];
        $nintendo = [13, 14, 15, 16, 17, 18, 19, 20, 21];
        $other = [22];

        $faker = Factory::create();
        foreach (Game::all() as $game) {
            //xbox has?
            $hasOnXbox = $faker->boolean();
            $hasOnsony = $faker->boolean();
            $hsaOnNintendo = $faker->boolean();
            $hasOnOthers = $faker->boolean();
            if ($hasOnXbox) $game->consoles()->attach($faker->randomElements($microsoft));
            if ($hasOnsony) $game->consoles()->attach($faker->randomElements($sony));
            if ($hsaOnNintendo) $game->consoles()->attach($faker->randomElements($nintendo));
            if ($hasOnOthers) $game->consoles()->attach($faker->randomElements($other));
        }
    }
}
