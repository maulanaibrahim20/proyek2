<?php

namespace App\Http\Controllers\Cetak;

use App\Http\Controllers\Controller;
use App\Models\Akun\Pasien;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class CetakController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $pasien = Pasien::all();

        if ($user->getRoleNames()[0] == 'pasien') {
            $pasien = Pasien::where('user_id', $user->id)->get();
        }

        return view('cetak.cetak', compact('pasien'));
    }
    
    public function cetak($kode_pasien)
    {
        $nama_pasien = Pasien::where('kode_pasien', $kode_pasien)->first();
        $pdf = Pdf::loadView('admin.Pasien.pdf',compact('nama_pasien'));
        return $pdf->stream('Hasil Diagnosa Dengan Nama Pasien '.$nama_pasien->getPasien->nama.".pdf");
        // return view ('admin.Pasien.pdf', compact('nama_pasien'));
        
    }
    
    public function cetak_semua()
    {
        $cetak_semua = Pasien::all();
        $pdf = Pdf::loadView('Cetak.cetak_semua',compact('cetak_semua'));
        return $pdf->stream('Data Keseluruhan Pasien.pdf');
        // return view ('Cetak.cetak_semua',compact('cetak_semua'));
    }
}
