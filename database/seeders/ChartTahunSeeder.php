<?php

namespace Database\Seeders;

use App\Models\ChartTahun;
use Illuminate\Database\Seeder;

class ChartTahunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        ChartTahun::create([
            'tahun' => 2023
        ]);
    }
}