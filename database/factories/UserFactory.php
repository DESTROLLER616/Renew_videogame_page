<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    protected $model = User::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'apellido_p' => $this->faker->lastName(),
            'apellido_m' => $this->faker->lastName(),
            'date_creation' => $this->faker->date(),
            'direction' => $this->faker->sentence(),
            'postcode' => '44990',
            'number_phone' => '3323322254',
            'id_type_user' => 1,
            'id_state' => $this->faker->randomElement(['1', '2']),
            'id_status' => $this->faker->randomElement(['1','2']),
            'email' => $this->faker->sentence(20),
            'password' => $this->faker->password(40),
            'image' => '###'
        ];
    }
}
