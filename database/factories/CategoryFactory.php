<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       return [
            'name' => $this->faker->unique()->words(2, true),
            'description' => $this->faker->sentence(12),
            'image' => 'demo/category-' . rand(1,10) . '.jpg',
            'status' => rand(0,1),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
