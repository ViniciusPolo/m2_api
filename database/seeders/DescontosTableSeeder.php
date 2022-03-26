<?php

namespace Database\Seeders;

use App\Models\Descontos;
use Illuminate\Database\Seeder;

class DescontosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Descontos::factory(15)->create();
    }
}
