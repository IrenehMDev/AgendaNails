<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Irene',
                'email' => 'ireneh@gmail.com',
                'password' => bcrypt('123456'),
                'role_id' => 1,
            ],
            [
          //  []
                'id' => 2,
                'name' => 'Salma',
                'email' => 'salma@gmail.com',
                'password' => bcrypt('123456'),
                'role_id' => 1,
            ],
        ]);
    }
}
