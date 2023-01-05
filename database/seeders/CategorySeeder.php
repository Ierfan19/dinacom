<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'id' => 1,
            'nama_kategori' => 'Mesin Asah Pisau',
            'created_at' => '2022-11-01 02:54:42',
            'updated_at' => '2022-11-01 02:54:42'
        ]);



        Category::create([
            'id' => 2,
            'nama_kategori' => 'Mesin Bambu Laminasi - Bambu Flooring',
            'created_at' => '2022-11-01 02:55:09',
            'updated_at' => '2022-11-01 02:55:09'
        ]);



        Category::create([
            'id' => 3,
            'nama_kategori' => 'Mesin Oven',
            'created_at' => '2022-11-01 02:56:49',
            'updated_at' => '2022-11-01 02:56:49'
        ]);



        Category::create([
            'id' => 4,
            'nama_kategori' => 'Mesin Oven, Mesin Pembuat Sumpit Bambu',
            'created_at' => '2022-11-01 02:57:28',
            'updated_at' => '2022-11-01 02:57:28'
        ]);



        Category::create([
            'id' => 5,
            'nama_kategori' => 'Mesin Packing',
            'created_at' => '2022-11-01 02:57:43',
            'updated_at' => '2022-11-01 02:57:43'
        ]);



        Category::create([
            'id' => 6,
            'nama_kategori' => 'Mesin Packing, Mesin Pembuat Sumpit Bambu',
            'created_at' => '2022-11-01 02:58:12',
            'updated_at' => '2022-11-01 02:58:12'
        ]);



        Category::create([
            'id' => 7,
            'nama_kategori' => 'Mesin Pembuat Sumpit Bambu, Mesin Pengolahan Bambu',
            'created_at' => '2022-11-01 02:59:01',
            'updated_at' => '2022-11-01 02:59:01'
        ]);



        Category::create([
            'id' => 8,
            'nama_kategori' => 'Mesin Pembuat Tusuk Sate Bambu',
            'created_at' => '2022-11-01 02:59:50',
            'updated_at' => '2022-11-01 02:59:50'
        ]);



        Category::create([
            'id' => 9,
            'nama_kategori' => 'Mesin Pengelohan Kayu',
            'created_at' => '2022-11-01 03:01:02',
            'updated_at' => '2022-11-01 03:01:02'
        ]);



        Category::create([
            'id' => 10,
            'nama_kategori' => 'Mesin Pengolahan Bambu',
            'created_at' => '2022-11-01 03:01:41',
            'updated_at' => '2022-11-01 03:01:41'
        ]);



        Category::create([
            'id' => 11,
            'nama_kategori' => 'Mesin Stick Ice Cream',
            'created_at' => '2022-11-01 03:03:13',
            'updated_at' => '2022-11-01 03:03:13'
        ]);



        Category::create([
            'id' => 12,
            'nama_kategori' => 'spare part',
            'created_at' => '2022-11-01 03:03:45',
            'updated_at' => '2022-11-01 03:03:45'
        ]);
    }
}
