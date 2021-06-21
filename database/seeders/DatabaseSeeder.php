<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(GameGenreSeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(ConsoleSeeder::class);
        $this->call(GameSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ProfileSeeder::class);
        $this->call(ConsoleGameSeeder::class);
        $this->call(GameUserSeeder::class);
    }
}
