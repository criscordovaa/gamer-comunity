<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory;

class ProfileSeeder extends Seeder
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
        foreach (User::all() as $user) {
            $age = $faker->numberBetween(13, 40);
            $userProfile = [
                //
                "user_id" => $user->id,
                "first_name" => $faker->name,
                "last_name" => $faker->lastName,
                "genre" => $faker->randomElement(["male", "female", "other"]),
                "address" => $faker->address,
                "ages" => $age,
                "birthday" => implode("-", array_replace(explode(
                    "-",
                    date("Y-m-d", strtotime("-${age} year"))),
                    [
                        1 => $faker->numberBetween(1, 12),
                        2 => $faker->numberBetween(1, 28)
                    ]
                )),
                "phone_number" => $faker->tollFreePhoneNumber,
                "country" => $faker->country,
            ];
            Profile::create($userProfile);
        }
    }
}
