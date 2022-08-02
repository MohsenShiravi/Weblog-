<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;

class LaratrustSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * category permissions
         */
        Permission::query()
            ->insert([
                [
                    'name' => 'create-category',
                    'display_name'=>'create category',
                    'description'=>'create category'
                ],
                [
                    'name' => 'read-category',
                    'display_name'=>'read category',
                    'description'=>'read category'
                ],
                [
                    'name' => 'update-category',
                    'display_name'=>'update category',
                    'description'=>'update category'
                ],
                [
                    'name' => 'delete-category',
                    'display_name'=>'delete category',
                    'description'=>'delete category'
                ],
            ]);

        /**
         * post permissions
         */
        Permission::query()
            ->insert([
                [
                    'name' => 'create-post',
                    'display_name'=>'create post',
                    'description'=>'create post'
                ],
                [
                    'name' => 'read-post',
                    'display_name'=>'read post',
                    'description'=>'read post'
                ],
                [
                    'name' => 'update-post',
                    'display_name'=>'update post',
                    'description'=>'update post'
                ],
                [
                    'name' => 'delete-post',
                    'display_name'=>'delete post',
                    'description'=>'delete post'
                ],
            ]);

        /**
         * user permissions
         */
        Permission::query()
            ->insert([
                [
                    'name' => 'read-user',
                    'display_name'=>'read user',
                    'description'=>'read user'
                ],
                [
                    'name' => 'update-user',
                    'display_name'=>'update user',
                    'description'=>'update user'
                ],
                [
                    'name' => 'delete-user',
                    'display_name'=>'delete user',
                    'description'=>'delete user'
                ]
            ]);
        /**
         * role permissions
         */
        Permission::query()
            ->insert([
                [
                    'name' => 'create-role',
                    'display_name'=>'create role',
                    'description'=>'create role'
                ]
            ]);

        /**
         * roles
         */

        $admin = Role::query()->create([
            'name' => 'admin',
            'display_name'=>'admin',
            'description'=>'admin'
        ]);

        $admin->permissions()->attach(Permission::all());

        Role::query()
            ->insert([
                [
                    'name' => 'editor',
                    'display_name'=>'editor',
                    'description'=>'editor'
                ],
                [
                    'name' => 'normal user',
                    'display_name'=>'normal user',
                    'description'=>'normal user'
                ]
            ]);

    }
}
