<?php

namespace App\Http\Controllers\Bidan\Perawatan;

use App\Http\Controllers\Controller;
use App\Models\Akun\Pasien;
use App\Models\Perawatan\Pertanyaan;
use Illuminate\Http\Request;

class KeluhanController extends Controller
{
    public function data_pasien()
    {
        $data["pasien"] = Pasien::orderBy("nik", "ASC")->get();
        
        return view("bidan.perawatan.data_pasien",$data);
    }
}
