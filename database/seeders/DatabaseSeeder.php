<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

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

        User::create([
            'username' => 'taufiq',
            'email' => 'taufiq@gmail.com',
            'password' => bcrypt('matematika'),
            'role_id' => 1
        ]);

        Mahasiswa::create([
            'user_id' => 1,
            'statusTA' => 'Belum Mengajukan'
        ]);

        User::create([
            'username' => 'dosen',
            'email' => 'dosen@gmail.com',
            'password' => bcrypt('matematika'),
            'role_id' => 2
        ]);

        Dosen::create([
            'user_id' => 2
        ]);

        User::create([
            'username' => 'kajur',
            'email' => 'kajur@gmail.com',
            'password' => bcrypt('matematika'),
            'role_id' => 3
        ]);

        Kajur::create([
            'user_id' => 3
        ]);

        User::create([
            'username' => 'sekjur',
            'email' => 'sekjur@gmail.com',
            'password' => bcrypt('matematika'),
            'role_id' => 4
        ]);

        Sekjur::create([
            'user_id' => 4
        ]);

        User::create([
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('matematika'),
            'role_id' => 5
        ]);

        Admin::create([
            'user_id' => 5
        ]);

        Jurusan::create([
            'jurusan' => 'Teknik Pengembangan Wilayah dan Kota
            '
        ]);

        Jurusan::create([
            'jurusan' => 'Teknik Informatika'
        ]);

        Jurusan::create([
            'jurusan' => 'Teknik Arsitektur'
        ]);

        Jurusan::create([
            'jurusan' => 'Biologi'
        ]);

        Jurusan::create([
            'jurusan' => 'Kimia'
        ]);

        Jurusan::create([
            'jurusan' => 'Fisika'
        ]);

        Jurusan::create([
            'jurusan' => 'Matematika'
        ]);

        Jurusan::create([
            'jurusan' => 'Ilmu Peternakan'
        ]);

        Fakultas::create([
            'fakultas' => 'Syariah dan Hukum'
        ]);

        Fakultas::create([
            'fakultas' => 'Tarbiyah dan Keguruan'
        ]);

        Fakultas::create([
            'fakultas' => 'Ushuluddin Filsafat dan Politik'
        ]);

        Fakultas::create([
            'fakultas' => 'Adab dan Humaniora'
        ]);

        Fakultas::create([
            'fakultas' => 'Dakwah dan Komunikasi'
        ]);

        Fakultas::create([
            'fakultas' => 'Sains dan Teknologi'
        ]);

        Fakultas::create([
            'fakultas' => 'Kedokteran dan Ilmu Kesehatan'
        ]);

        Fakultas::create([
            'fakultas' => 'Ekonomi dan Bisnis Islam'
        ]);
    }
}
