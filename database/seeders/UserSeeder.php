<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'dinacom@mail.com',
            'email' => 'dinacom@mail.com',
            'password' => bcrypt('123456')
        ]);

        $user->assignRole('admin');


        $admin = User::create([
            'name' => 'user@mail.com',
            'email' => 'user@mail.com',
            'password' => bcrypt('123456')
        ]);
        $admin->assignRole('admin');

    }
}
