<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // users seeder data
        $users = [
            ['name' => 'amr gamal', 'email' => 'amrfa377@gmail.com','password' => '2536001', 'role' => 'owner' , 'permission' => ['users_create','users_read','users_update','users_delete']],
            ['name' => 'super admin', 'email' => 'super@admin.com','password' => '123456789', 'role' => 'super_admin' , 'permission' => ['users_create','users_read','users_update']],
            ['name' => 'ahmed', 'email' => 'ahmed@ahmed.com','password' => '123456789', 'role' => 'user' , 'permission' => []],
        ];

        // create all permission
        foreach ($users[0]['permission'] as $Perm) {
            Permission::create([
                'name' => $Perm,
                'display_name' => $Perm, // optional
                'description' => $Perm, // optional
            ]);
        }

        // create users and permission users and role users
        foreach ($users as $user) {

            $singlUser = User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => Hash::make($user['password']),
            ]);

            $singlUser->attachRole($user['role']);

            $singlUser->attachPermissions($user['permission']);

        }

    }
}
