<?php

namespace Database\Seeders\Akun;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Akun\Role;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            "nama" => "admin"
        ]);

        Role::create([
            "nama" => "kepala desa"
        ]);
        
        Role::create([
            "nama" => "kepala kecamatan"
        ]);

        Role::create([
            "nama" => "kepala puskesmas"
        ]);

        Role::create([
            "nama" => "bidan"
        ]);
    }
}
