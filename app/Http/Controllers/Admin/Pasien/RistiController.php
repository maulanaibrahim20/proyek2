<?php

namespace App\Http\Controllers\Admin\Pasien;

use App\Http\Controllers\Controller;
use App\Models\Akun\Pasien;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class RistiController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        $pasien = Pasien::all();

        if ($user->getRoleNames()[0] == 'pasien') {
            $pasien = Pasien::where('user_id', $user->id)->get();
        }
        return view('admin.pasien.pasien', compact('pasien'));
    }
    
}
