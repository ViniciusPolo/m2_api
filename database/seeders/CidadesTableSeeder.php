<?php

namespace Database\Seeders;

use App\Models\Cidades;
use Illuminate\Database\Seeder;

class CidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cidades::factory(100)->create();
    }
}
