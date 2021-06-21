<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $companies = [
            "Activision Blizzard",
            "Big Fish Games",
            "Bonfire Studios",
            "Bungie",
            "DoubleDown Interactive",
            "Discord",
            "Electronic Arts",
            "Epic Games",
            "Jam City",
            "MobilityWare",
            "PopCap Games",
            "Glu Mobile",
            "Scopely",
            "Twitch",
            "Zynga",
            "CD Projekt"
        ];
        foreach($companies as $company){
            Company::create([
                "name" => $company
            ]);
        }
    }
}
