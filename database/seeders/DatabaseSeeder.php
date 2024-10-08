<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        $this->call(AppointmentTypeSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(ActionSeeder::class);
        $this->call(ActionRoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(StatusEntrySeeder::class);
        Schema::enableForeignKeyConstraints();
    }
}
