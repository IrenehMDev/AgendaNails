<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusEntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('status_entries')->delete();
        DB::table('status_entries')->insert([
            [
                'id' => 1,
                'name' => 'Publicado',
                'descripcion' => 'Un verbillo',
                'active' => true,
            ],
            [
                'id' => 2,
                'name' => 'Borrador',
                'descripcion' => 'Un verbillo 2',
                'active' => true,
            ],
        ]);
    }
}
