<?php

namespace Database\Seeders;

use App\Models\Campanhas;
use Illuminate\Database\Seeder;

class CampanhasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Campanhas::factory(20)->create();
    }
}
