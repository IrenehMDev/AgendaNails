<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('action_role')->delete();
        DB::table('action_role')->insert([
            [
                'id' => 1,
                'action_id' => 1,
                'role_id' => 2
            ],
            [
                'id' => 2,
                'action_id' => 2,
                'role_id' => 2
            ],
            [
                'id' => 3,
                'action_id' => 3,
                'role_id' => 2
            ],
            [
                'id' => 4,
                'action_id' => 4,
                'role_id' => 2
            ],
            [
                'id' => 5,
                'action_id' => 5,
                'role_id' => 2
            ],
        ]);
    }
}
