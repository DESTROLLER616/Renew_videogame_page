<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_client' => $this->faker->randomElement([1, 5]),
            'subtotal' => 200,
            'cantidad' => 10,
            'estatus' => $this->faker->randomElement([1, 2]),
        ];
    }
}
