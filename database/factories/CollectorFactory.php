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
            'first_name' => fake() -> firstName(),
            'path_img' => fake() -> imageUrl(480, 480, 'people', true),
            'cars_num' => fake() -> numberBetween(2, 50)
        ];
    }
}
