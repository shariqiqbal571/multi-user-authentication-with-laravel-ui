<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['name' => 'Ihsaan Chandio',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('1234'),
            'role_id' => 1,
            ],

            ['name' => 'Ihsaan Chandio',
            'email' => 'member@gmail.com',
            'password' => Hash::make('1234'),
            'role_id' => 2,
            ],

            ['name' => 'Guru Chandio',
            'email' => 'guru@gmail.com',
            'password' => Hash::make('1234'),
            'role_id' => 3,
           ],

            ['name' => 'Genie Chandio',
            'email' => 'genie@gmail.com',
            'password' => Hash::make('1234'),
            'role_id' => 4,
           ],

        ]);
    }
}
