<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            [
                'name' => 'Nico',
                'email' => 'nico@nico',
                'password' => Hash::make('nico@nico'),
                'role_id' => 1
            ],
            [
                'name' => 'Youssef',
                'email' => 'youssef@youssef',
                'password' => Hash::make('youssef@youssef'),
                'role_id' => 2
            ],
            [
                'name' => 'Florence',
                'email' => 'florence@florence',
                'password' => Hash::make('florence@florence'),
                'role_id' => 3
            ],
            [
                'name' => 'Martin',
                'email' => 'martin@martin',
                'password' => Hash::make('martin@martin'),
                'role_id' => 2
            ]

        ]);
    }
}
