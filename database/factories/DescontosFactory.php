<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DescontosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'desconto'=>$this->faker->numberBetween($int1 = 1, $int2 = 15)
            
        ];
    }
}
