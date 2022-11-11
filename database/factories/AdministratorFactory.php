<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AdministratorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
            return [
                'id_user' => '',
                'salario' => 100.00,
                'fecha_contratacion' => $this->faker->date(),
            ];
    }
}
