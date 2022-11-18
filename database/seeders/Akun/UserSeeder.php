<?php

namespace Database\Seeders\Akun;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "nama" => "Administrator",
            "username" => "administrator",
            "email" => "admin@gmail.com",
            "password" => bcrypt("password"),
            "alamat" => "indramayu",
            "umur" => 11,
            "role_id" => "1",
        ]);
        User::create([
            "nama" => "Kepala Puskesmas",
            "username" => "kepalapuskesmas",
            "email" => "admin1@gmail.com",
            "password" => bcrypt("password"),
            "alamat" => "indramayu",
            "umur" => 11,
            "role_id" => "2",
        ]);
        User::create([
            "nama" => "Kepala Kecamatan",
            "username" => "kepalakecamatan",
            "email" => "admin2@gmail.com",
            "password" => bcrypt("password"),
            "alamat" => "indramayu",
            "umur" => 11,
            "role_id" => "3",
        ]);
        User::create([
            "nama" => "Kepala Desa",
            "username" => "kepaladesa",
            "email" => "admin3@gmail.com",
            "password" => bcrypt("password"),
            "alamat" => "indramayu",
            "umur" => 11,
            "role_id" => "4",
        ]);
        User::create([
            "nama" => "Bidan",
            "username" => "bidan",
            "email" => "admin4@gmail.com",
            "password" => bcrypt("password"),
            "alamat" => "indramayu",
            "umur" => 11,
            "role_id" => "5",
        ]);
        User::create([
            "nama" => "Pasien",
            "username" => "pasien",
            "email" => "admin5@gmail.com",
            "password" => bcrypt("password"),
            "alamat" => "indramayu",
            "umur" => 11,
            "role_id" => "6",
        ]);
    }
}
