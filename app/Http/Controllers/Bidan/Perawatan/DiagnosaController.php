<?php

namespace App\Http\Controllers\Bidan\Perawatan;

use App\Http\Controllers\Controller;
use App\Models\Akun\Pasien;
use App\Models\HasilJawaban;
use App\Models\Master\Pertanyaan;
use App\Models\Perawatan\JawabanDiagnosa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DiagnosaController extends Controller
{

    public function show($kode_pasien)
    {
        $pertanyaan = Pertanyaan::all();
        $nama_pasien = Pasien::where('kode_pasien',$kode_pasien)->first();
        return view('bidan.diagnosa.diagnosa',['pasien'=>$nama_pasien, 'pertanyaan'=>$pertanyaan]);
    }

    public function store(Request $request)
    {
        
        return DB::transaction(function() use ($request) {
            $attr = [];
            $nilai = 0;
            $nilaiMax = 0;

            foreach ($request->pertanyaan as $pt => $value) {
                $pertanyaan = Pertanyaan::find($pt);
                if ($pertanyaan) {
                    if ($value['opsi'] == '1') {
                        $nilai += $pertanyaan->bobot;
                    }
                }
    
                $attr['kode_pasien']=$request->kode_pasien;
                $attr['id_pertanyaan']=$pt;
                $attr['jawaban']=$value['opsi'];
                
                if (isset($value['note'])) {
                    $attr['note']=$value['note'];
                }
    
                JawabanDiagnosa::create($attr);
            }
    
            $kumpulanPertanyaan = Pertanyaan::all();
            foreach ($kumpulanPertanyaan as $kumpar) {
                $nilaiMax += $kumpar->bobot;
            }
    
            $hasilNilai = ($nilai / $nilaiMax) * 100;
            HasilJawaban::create(['kode_pasien'=>$request->kode_pasien,'jawaban'=>$hasilNilai]);
            return view('bidan.perawatan.pasien');
        });


    }


}
