<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Permission;

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
            'no_telp' => '0800000000',
            'alamat' => 'jepara',
            'password' => bcrypt('123456')
        ]);

        $permission = Permission::create(['name' => 'user_role']);
        $user->assignRole('user')->givePermissionTo($permission);


        $admin = User::create([
            'name' => 'user@mail.com',
            'email' => 'user@mail.com',
            'no_telp' => '0800000000',
            'alamat' => 'jepara',
            'password' => bcrypt('123456')
        ]);
        $admin->assignRole('admin');
    }
}