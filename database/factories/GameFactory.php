<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\game;
use App\Models\GameGenre;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = game::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            "sku" => $this->faker->unique()->ean13(),
            "name" => $this->faker->company,
            "description" => $this->faker->text(150),
            "players_number" => $this->faker->numberBetween(1, 4),
            "presale" =>$this->faker->boolean(),
            "game_genre_id" =>GameGenre::all()->random()->id,
            "price" =>$this->faker->randomFloat(2, 800, 2500),
            "release_date" =>$this->faker->dateTimeBetween("-1 year", "+5 years"),
            "company_id" =>Company::all()->random()->id,
        ];
    }
}
