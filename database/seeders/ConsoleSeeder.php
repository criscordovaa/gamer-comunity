<?php

namespace Database\Seeders;

use App\Models\Console;
use Illuminate\Database\Seeder;

class ConsoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $consoles = [
            "Xbox",
            "Xbox 360",
            "Xbox One",
            "Xbox Series X",
            "Xbox Series S",
            "Playstation",
            "PSP",
            "Playstation One",
            "Playstation 2",
            "Playstation 3",
            "Playstation 4",
            "Playstation 5",
            "Nintendo 64",
            "Game Boy",
            "Game Boy Advance",
            "Nintendo GameCube",
            "Nintendo DS",
            "Nintendo DSi",
            "Wii",
            "Wii U",
            "Nintendo Switch",
            "PC"
        ];
        foreach($consoles as $console){
            Console::create([
                "name" => $console
            ]);
        }
    }
}
