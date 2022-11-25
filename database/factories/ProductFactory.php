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
            'name' => $this->faker->word(),
            'price' => $this->faker->randomNumber(4, false),
            'stock' => $this->faker->randomNumber(4, true),
            'sold' => $this->faker->numberBetween(10, 1000),
            'created_at' => $this->faker->dateTimeBetween('-10 week', '-1 week'),
            'category_id' => $this->faker->numberBetween(1,4),
            'brand_id' => $this->faker->numberBetween(1, 6),
            'image' => $this->faker->imageUrl(300, 300, 'products')
        ];
    }
}
