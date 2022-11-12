<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'mobile'=>'09337332680',
                'password' => bcrypt('12345678')
            ],
            [
                'name' => 'mohsen',
                'email' => 'm.shiravi@gmail.com',
                'mobile'=>'09337332681',
                'password' => bcrypt('12345678')
            ],
            [
                'name' => 'ali',
                'email' => 'ali@gmail.com',
                'mobile'=>'09337332682',
                'password' => bcrypt('12345678')
            ],
            [
                'name' => 'morteza',
                'email' => 'morteza@gmail.com',
                'mobile'=>'09337332683',
                'password' => bcrypt('12345678')
            ],
            [
                'name' => 'navid',
                'email' => 'navid@gmail.com',
                'mobile'=>'09337332684',
                'password' => bcrypt('12345678')
            ]
        ]);
    }
}
