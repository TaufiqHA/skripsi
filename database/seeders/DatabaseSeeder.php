<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::create([
            'role_name' => 'Mahasiswa',
        ]);

        Role::create([
            'role_name' => 'Dosen',
        ]);

        Role::create([
            'role_name' => 'Kajur',
        ]);

        Role::create([
            'role_name' => 'Sekjur',
        ]);

        Role::create([
            'role_name' => 'Admin',
        ]);
    }
}
