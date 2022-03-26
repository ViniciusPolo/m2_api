<?php

namespace Database\Factories;

use App\Models\Grupocidades;
use Illuminate\Database\Eloquent\Factories\Factory;

class CidadesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cidade' => $this->faker->city(),
            'grupo_cidade' => $this->faker->numberBetween($int1 = 1, $int2 = 20)

        ];
    }
}
