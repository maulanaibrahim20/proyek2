<?php

namespace App\Http\Controllers;

use App\Models\Akun\Pasien;
use App\Models\HasilJawaban;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function dashboard()
    {
        

        return view('admin.dashboard_admin') ;
    }
}
