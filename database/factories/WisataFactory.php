<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use DB;
use Carbon\Carbon;

class WisataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => Str::random(10),
            'gambar' => $this->faker->image(public_path('wisata'), 400,400,null,false),
            'deskripsi' => Str::random(50),
            'alamat' => Str::random(15),
            'viewer' => 0,
            'created_at' => Carbon::now('Asia/Jakarta'),
            'updated_at' => Carbon::now('Asia/Jakarta'),
        ];
    }
}
