<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=User::query()->insert([
            'name' => 'mohsen shiravi',
            'email' => 'm.shiravi7770@gmail.com',
            'password' => bcrypt(12345678)
        ]);
        $user->roles()->attach(1);
    }
}
