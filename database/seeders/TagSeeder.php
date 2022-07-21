<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::query()->insert([
            ['title'=>'PHP'],
            ['title'=>'JS'],
            ['title'=>'LARAVEL'],
            ['title'=>'CATLIN'],
            ['title'=>'GO'],
            ['title'=>'HTML'],
            ['title'=>'SASS']
        ]);
    }
}
