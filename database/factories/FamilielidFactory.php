<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Familielid>
 */
class FamilielidFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'dateOfBirth' => $this->faker->date(),
            'soort_lids_id' => $this->faker->numberBetween(1, 5),
            'families_id' => $this->faker->numberBetween(1, 5)
        ];
    }
}
