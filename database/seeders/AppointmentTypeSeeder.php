<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppointmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('appointment_types')->delete();
        DB::table('appointment_types')->insert([
            [
                'id' => 1,
                'name' => 'Manicure',
                'description' => 'Limpieza, humectación, etc...',
            ],
            [
                'id' => 2,
                'name' => 'Pedicure',
                'description' => 'Limpieza, humectación, etc...',
            ],
        ]);
    }
}
