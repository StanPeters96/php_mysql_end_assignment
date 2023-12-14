<?php

namespace Database\Seeders;

use App\Models\Boekjaar;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BoekjaarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
            $Boejaar = Boekjaar::factory()->create([
                'id' => '1',
                'jaar' => '2023'
            ]);
    }
}
