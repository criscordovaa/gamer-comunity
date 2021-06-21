<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory;

class GameUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Factory::create();
        $types = ["like_it", "have_it", "want_it"];
        foreach (User::all() as $user) {
            $arrValues = [];
            foreach (Game::all() as $game) {
                $arrValues[$game->id] = ["type" => $faker->randomElement($types)];
            }
            $user->games()->sync($arrValues);
        }
    }
}
