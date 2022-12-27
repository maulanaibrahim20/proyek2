<?php

namespace App\Http\Controllers\Cetak;

use App\Http\Controllers\Controller;
use App\Models\Akun\Pasien;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class CetakController extends Controller
{
    public function index()
    {
        $pasien = Pasien::all();
        return view('cetak.cetak', compact('pasien'));
    }
    
    public function cetak($kode_pasien)
    {
        $nama_pasien = Pasien::where('kode_pasien', $kode_pasien)->first();
        $pdf = Pdf::loadView('admin.Pasien.pdf');
        // return $pdf->stream('invoice.pdf');
        return view('admin.Pasien.pdf' );
    }
}
