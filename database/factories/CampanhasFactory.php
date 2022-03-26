<?php

namespace Database\Factories;

use App\Models\Descontos;
use Illuminate\Database\Eloquent\Factories\Factory;

class CampanhasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'campanha'=>$this->faker->sentence(3),
            'desconto_da_campanha'=>$this->faker->numberBetween($int1 = 1, $int2 = 15)

        ];
    }
}
