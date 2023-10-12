<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'category_id' => \App\Models\Category::inRandomOrder()->first()->id,
            'description'=> $this->faker->paragraph,
            'price' => rand(1000,99999)
        ];
    }
}
