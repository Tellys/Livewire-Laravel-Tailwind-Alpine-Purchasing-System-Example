<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(2, true),
            'price' => $this->faker->randomFloat(1, 5, 99),
            'lucro' => $this->faker->randomDigitNot(2),
            'description' => $this->faker->text(100)
            //
        ];
    }
}
