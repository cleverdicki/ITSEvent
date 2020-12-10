<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'level' => 'admin',
            'nrp' => 0,
            'email' => 'admin@admin.com',
            'password' => bcrypt('adminUser'),
            'remember_token' => Str::random(60),
        ]);

        DB::table('users')->insert([
            'name' => 'User',
            'level' => 'user',
            'nrp' => 0,
            'email' => 'user@user.com',
            'password' => bcrypt('userUser'),
            'remember_token' => Str::random(60),
        ]);
    }
}