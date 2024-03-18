<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $countries = [
            ['name' => 'VietNam'],
            ['name' => 'Thailand'],
            ['name' => 'Campudia'],
        ];

        $medals = [
            ['name' => 'GOLD'],
            ['name' => 'SILVER'],
            ['name' => 'BRONZE'],
        ];

        $seasons = [
            ["year" => 2021],
            ["year" => 2022],
            ["year" => 2023],
        ];

        $details = [
            ['season_id' => 1, 'country_id' => 1, 'medal_id' => 1, 'total' => 10],
            ['season_id' => 1, 'country_id' => 1, 'medal_id' => 2, 'total' => 20],
            ['season_id' => 1, 'country_id' => 1, 'medal_id' => 3, 'total' => 30],
            ['season_id' => 1, 'country_id' => 2, 'medal_id' => 1, 'total' => 11],
            ['season_id' => 1, 'country_id' => 2, 'medal_id' => 2, 'total' => 22],
            ['season_id' => 1, 'country_id' => 2, 'medal_id' => 3, 'total' => 33],
            ['season_id' => 1, 'country_id' => 3, 'medal_id' => 1, 'total' => 13],
            ['season_id' => 1, 'country_id' => 3, 'medal_id' => 2, 'total' => 24],
            ['season_id' => 1, 'country_id' => 3, 'medal_id' => 3, 'total' => 35],

            ['season_id' => 2, 'country_id' => 1, 'medal_id' => 1, 'total' => 20],
            ['season_id' => 2, 'country_id' => 1, 'medal_id' => 2, 'total' => 30],
            ['season_id' => 2, 'country_id' => 1, 'medal_id' => 3, 'total' => 40],
            ['season_id' => 2, 'country_id' => 2, 'medal_id' => 1, 'total' => 21],
            ['season_id' => 2, 'country_id' => 2, 'medal_id' => 2, 'total' => 32],
            ['season_id' => 2, 'country_id' => 2, 'medal_id' => 3, 'total' => 43],
            ['season_id' => 2, 'country_id' => 3, 'medal_id' => 1, 'total' => 23],
            ['season_id' => 2, 'country_id' => 3, 'medal_id' => 2, 'total' => 34],
            ['season_id' => 2, 'country_id' => 3, 'medal_id' => 3, 'total' => 45],

            ['season_id' => 3, 'country_id' => 1, 'medal_id' => 1, 'total' => 21],
            ['season_id' => 3, 'country_id' => 1, 'medal_id' => 2, 'total' => 32],
            ['season_id' => 3, 'country_id' => 1, 'medal_id' => 3, 'total' => 43],
            ['season_id' => 3, 'country_id' => 2, 'medal_id' => 1, 'total' => 24],
            ['season_id' => 3, 'country_id' => 2, 'medal_id' => 2, 'total' => 35],
            ['season_id' => 3, 'country_id' => 2, 'medal_id' => 3, 'total' => 46],
            ['season_id' => 3, 'country_id' => 3, 'medal_id' => 1, 'total' => 27],
            ['season_id' => 3, 'country_id' => 3, 'medal_id' => 2, 'total' => 38],
            ['season_id' => 3, 'country_id' => 3, 'medal_id' => 3, 'total' => 49],
        ];

        DB::table('countries')->insert($countries);

        DB::table('medals')->insert($medals);

        DB::table('seasons')->insert($seasons);

        DB::table('details')->insert($details);
    }
}
