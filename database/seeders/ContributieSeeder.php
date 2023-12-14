<?php

namespace Database\Seeders;

use App\Models\Contributie;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContributieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Contributie1 = Contributie::factory()->create([
            'id' => '1',
            'soort_lids_id' => 1,
            'boekjaars_id' => 1,
            'leeftijd' => 'Jonger dan 8',
            'bedrag' => 50.00
        ]);
        $Contributie2 = Contributie::factory()->create([
            'id' => '2',
            'soort_lids_id' => 2,
            'boekjaars_id' => 1,
            'leeftijd' => '8 t/m 12 jaar',
            'bedrag' => 60.00
        ]);
        $Contributie3 = Contributie::factory()->create([
            'id' => '3',
            'soort_lids_id' => 3,
            'boekjaars_id' => 1,
            'leeftijd' => '13 t/m 17 jaar',
            'bedrag' => 75.00
        ]);
        $Contributie4 = Contributie::factory()->create([
            'id' => '4',
            'soort_lids_id' => 4,
            'boekjaars_id' => 1,
            'leeftijd' => '18 t/m 50 jaar',
            'bedrag' => 100.00
        ]);
        $Contributie5 = Contributie::factory()->create([
            'id' => '5',
            'soort_lids_id' => 5,
            'boekjaars_id' => 1,
            'leeftijd' => 'Vanaf 51 jaar',
            'bedrag' => 55.00
        ]);
    }
}
