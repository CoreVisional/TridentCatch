<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RoeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'source_of_fish' => $this->faker->unique()->name(),
            'type_of_roe' => $this->faker->name(),
            'unit_price' => $this->faker->numberBetween(500, 2000)
        ];
    }
}
