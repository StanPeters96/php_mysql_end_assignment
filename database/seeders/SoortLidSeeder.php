<?php

namespace Database\Seeders;

use App\Models\soortLid;
use App\Models\Familielid;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SoortLidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $soortlid1 = soortLid::factory()->create([
            'id' => '1',
            'contributies_id' => 1,
            'omschrijving' => 'Jeugd: jonger dan 9 jaar 50% korting'
        ]);
        $soortlid2 = soortLid::factory()->create([
            'id' => '2',
            'contributies_id' => 2,
            'omschrijving' => 'Aspirant: van 8 tot 12 jaar 40% korting'
        ]);
        $soortlid3 = soortLid::factory()->create([
            'id' => '3',
            'contributies_id' => 3,
            'omschrijving' => 'Junior: van 13 tot 17 jaar 25% korting'
        ]);
        $soortlid4 = soortLid::factory()->create([
            'id' => '4',
            'contributies_id' => 4,
            'omschrijving' => 'Senior: van 18 tot 50 jaar 0% korting'
        ]);
        $soortlid5 = soortLid::factory()->create([
            'id' => '5',
            'contributies_id' => 5,
            'omschrijving' => 'Veteraan: Vanaf 51 jaar 45% korting'
        ]);
    }
}
