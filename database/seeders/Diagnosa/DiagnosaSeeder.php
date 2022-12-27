<?php

namespace Database\Seeders\Diagnosa;

use App\Models\Master\Pertanyaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiagnosaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pertanyaan::create([
            "teks_pertanyaan"=>"Apakah ibu sudah mengalami kehamilan lebih dari empat kali ?",
            "bobot"=>"10",
            "note"=>"0"
        ]);
        Pertanyaan::create([
            "teks_pertanyaan"=>"Berapa tahun jarak persalinan terakhir dan kehamilan sekrang ?",
            "bobot"=>"10",
            "note"=>"1"
        ]);
        Pertanyaan::create([
            "teks_pertanyaan"=>"Apakah ibu memiliki riwayat Anemia dan Hb?",
            "bobot"=>"10",
            "note"=>"1"
        ]);
        Pertanyaan::create([
            "teks_pertanyaan"=>"Apakah mengalami pendarahan berlebihan ketika hamil?",
            "bobot"=>"10",
            "note"=>"0"
        ]);
        Pertanyaan::create([
            "teks_pertanyaan"=>"Apakah memiliki riwayat penyakait kronis?",
            "bobot"=>"10",
            "note"=>"0"
        ]);
        Pertanyaan::create([
            "teks_pertanyaan"=>"Apakah selama kehamilan mengalami depresi?",
            "bobot"=>"10",
            "note"=>"1"
        ]);
        Pertanyaan::create([
            "teks_pertanyaan"=>"Apakah memiliki tekanan darah tinggi ketika hamil?",
            "bobot"=>"10",
            "note"=>"0"
        ]);
        Pertanyaan::create([
            "teks_pertanyaan"=>"Apakah pernah mengalami HIV atau AIDS sebelum kehamilan?",
            "bobot"=>"10",
            "note"=>"0"
        ]);
        Pertanyaan::create([
            "teks_pertanyaan"=>"Apakah memiliki riwayat keguguran berulang?",
            "bobot"=>"10",
            "note"=>"1"
        ]);
        Pertanyaan::create([
            "teks_pertanyaan"=>"Apakah memiliki riwayat bayi dan keluarga cacat kongenital?",
            "bobot"=>"10",
            "note"=>"0"
        ]);
    }
}
