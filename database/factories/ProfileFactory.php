<?php

namespace Database\Factories;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $age = $this->faker->numberBetween(13, 40);
        return [
            //
            "user_id" => User::whereNotIn("id", Profile::all()->pluck("user_id")->toArray())->get()->random(),
            "first_name" => $this->faker->name,
            "last_name" => $this->faker->lastName,
            "genre" => $this->faker->randomElement(["male", "female", "other"]),
            "address" => $this->faker->address,
            "ages" => $age,
            "birthday" => implode("-", array_replace(explode("-", date("Y-m-d", strtotime("-${age} year"))), [1 => $this->faker->numberBetween(1, 12)])),
            "phone_number" => $this->faker->tollFreePhoneNumber,
            "country" => $this->faker->country,
        ];
    }
}
