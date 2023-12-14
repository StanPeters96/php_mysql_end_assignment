<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Familie;
use App\Models\Boekjaar;
use App\Models\soortLid;
use App\Models\Familielid;
use App\Models\Contributie;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    // public function run(): void
    // {
    //     // \App\Models\User::factory(10)->create();

    //     // \App\Models\User::factory()->create([
    //     //     'name' => 'Test User',
    //     //     'email' => 'test@example.com',
    //     // ]);

    //     soortLid::factory(5)->create();

    //     Contributie::factory(5)->create();

    //     Boekjaar::factory(2)->create();

    //     Familie::factory(5)->create();

    //     Familielid::factory(15)->create();

    // }

    public function run(): void
    {
        $this->call([
            ContributieSeeder::class,
            SoortLidSeeder::class,
            BoekjaarSeeder::class,
            FamilieSeeder::class,
            FamilielidSeeder::class,
        ]);
    }
}
