<?php

namespace App\Http\Controllers\Admin\Pasien;

use App\Http\Controllers\Controller;
use App\Models\Akun\Pasien;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class RistiController extends Controller
{
    public function index()
    {
        $pasien = Pasien::all();
        return view('admin.pasien.pasien', compact('pasien'));
    }
    
}
