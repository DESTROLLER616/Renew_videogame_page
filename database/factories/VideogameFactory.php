<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VideogameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'desarrolladora' => $this->faker->name(),
            'publicadora' => $this->faker->name(),
            'fecha_estreno' => $this->faker->date(),
            'descripcion' => "######",
            'codigo' => '000000',
            'stock' => 15,
            'precio' => 60.00,
            'id_clasificacion' => $this->faker->randomElement([1, 2]),
            'id_region' => $this->faker->randomElement([1, 2]),
            'id_genero' => $this->faker->randomElement([1, 2]),
            'id_consola' => $this->faker->randomElement([1, 2]),
            'image' => '###'
        ];
    }
}
