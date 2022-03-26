<?php

namespace Database\Factories;

use App\Models\Campanhas;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'produto' => $this->faker->word(1),
            'preco_produto' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 5.00, $max = 100.00),
            'campanha_atual' => $this->faker->numberBetween($int1 = 1, $int2 = 20)
        ];
    }
}
