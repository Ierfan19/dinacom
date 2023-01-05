<?php

namespace Database\Seeders;

use App\Models\Viewer;
use Illuminate\Database\Seeder;

class ViewerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Viewer::create([
            'bulan' => 'januari'
        ]);
        Viewer::create([
            'bulan' => 'februari'
        ]);
        Viewer::create([
            'bulan' => 'maret'
        ]);
        Viewer::create([
            'bulan' => 'april'
        ]);
        Viewer::create([
            'bulan' => 'mei'
        ]);
        Viewer::create([
            'bulan' => 'juni'
        ]);
        Viewer::create([
            'bulan' => 'juli'
        ]);
        Viewer::create([
            'bulan' => 'agustus'
        ]);
        Viewer::create([
            'bulan' => 'september'
        ]);
        Viewer::create([
            'bulan' => 'oktober'
        ]);
        Viewer::create([
            'bulan' => 'november'
        ]);
        Viewer::create([
            'bulan' => 'desember'
        ]);
    }
}
