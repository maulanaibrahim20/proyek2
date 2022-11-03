<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function dashboard_admin()
    {
        return view('admin.dashboard_admin') ;
    }
    public function dashboard_bidan()
    {
        return view('bidan.dashboard_bidan') ;
    }
    public function dashboard_kecamatan()
    {
        return view('kecamatan.dashboard_kecamatan');
    }
    public function dashboard_desa()
    {
        return view('desa.dashboard_desa');
    }
    public function dashboard_puskesmas()
    {
        return view('puskesmas.dashboard_puskesmas');
    }
}
