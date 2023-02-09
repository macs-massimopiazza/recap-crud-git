<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Collector>
 */
class CollectorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name' => fake()->firstName(),
            'path_img' => "https://i.pravatar.cc/150?u=" . fake()->numerify('##########'),
            'cars_num' => fake()->numberBetween(2, 50)
        ];
    }
}