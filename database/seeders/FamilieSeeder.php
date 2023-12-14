<?php

namespace Database\Seeders;

use App\Models\Familie;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FamilieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Familie::factory()->create();

        $Familie1 = Familie::factory()->create([
            'id' => '1',
            'name_family' => 'Peters',
            'adress' => 'Wiericke 75, de Meern'
        ]);
        $Familie2 = Familie::factory()->create([
            'id' => '2',
            'name_family' => 'Jansen',
            'adress' => 'Keizerstraat 12, Montfoort'
        ]);
        $Familie3 = Familie::factory()->create([
            'id' => '3',
            'name_family' => 'Schaafsma',
            'adress' => 'Zilverschoon 5, Benschop'
        ]);
        $Familie4 = Familie::factory()->create([
            'id' => '4',
            'name_family' => 'Spruit',
            'adress' => 'Abraham colijnhof 15, Montfoort'
        ]);
        $Familie5 = Familie::factory()->create([
            'id' => '5',
            'name_family' => 'De jong',
            'adress' => 'Waardsedijk Oost 8, Montfoort'
        ]);
    }
}
