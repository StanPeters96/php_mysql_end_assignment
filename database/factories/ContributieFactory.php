<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contributie>
 */
class ContributieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'leeftijd' => $this->faker->numberBetween(4, 60),
            // 'soortlid_id' => $this->faker->numberBetween(1, 5),
            'bedrag' => $this->faker->randomDigit(10)
            
        ];
    }
}
