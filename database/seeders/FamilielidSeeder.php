<?php

namespace Database\Seeders;

use App\Models\soortLid;
use App\Models\Familielid;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FamilielidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Familielid::factory(15)->create();
    }
}
