<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DispositivoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cliente_id' => $this->faker->numberBetween(1, 10),
            'code' => $this->faker->randomNumber(),
            'descripcion' => $this->faker->text(),
            
        ];
    }
}
