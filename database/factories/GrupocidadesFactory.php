<?php

namespace Database\Factories;

use App\Models\Campanhas;
use Illuminate\Database\Eloquent\Factories\Factory;

class GrupocidadesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'grupo'=>$this->faker->sentence(3),
            'campanha_ativa'=>$this->faker->numberBetween($int1 = 1, $int2 = 20)
            //'campanha_ativa'=>Campanhas::factory()->create()->id
        ];
    }
}
