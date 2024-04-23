<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('actions')->delete();
        DB::table('actions')->insert([
            [
                'id' => 1,
                'name' => 'appointmentType.index',
                'description' => '',
            ],
            [
                'id' => 2,
                'name' => 'appointmentType.store',
                'description' => '',
            ],
            [
                'id' => 3,
                'name' => 'appointmentType.show',
                'description' => '',
            ],
            [
                'id' => 4,
                'name' => 'appointmentType.update',
                'description' => '',
            ],
            [
                'id' => 5,
                'name' => 'appointmentType.destroy',
                'description' => '',
            ],
        ]);
    }
}
