<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->unique()->word(),
            'description' => fake()->paragraphs(5, true),
            'short_description' => fake()->sentences(2, true),
            'SKU' => fake()->unique()->ean8(),
            'price' => fake()->randomFloat(2, 10, 100),
            'discount' => rand(10, 70),
            'in_stock' => rand(0, 100),
            'thumbnail' => fake()->image(),
        ];
    }
}
