<?php

namespace Database\Seeders;

use App\Models\Grupocidades;
use Illuminate\Database\Seeder;

class GrupoCidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grupocidades::factory(20)->create();
    }
}
