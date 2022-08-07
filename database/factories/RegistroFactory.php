<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RegistroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dispositivo_id' => $this->faker->numberBetween(1, 10),
            'temperatura' => $this->faker->numberBetween(1, 37),
            'humedad' => $this->faker->numberBetween(1, 37),
            'presion_atmosferica' => $this->faker->numberBetween(1, 37),
            'velocidad_viento' =>   $this->faker->numberBetween(1, 37), 


        ];
    }
}
