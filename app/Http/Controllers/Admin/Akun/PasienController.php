<?php

namespace App\Http\Controllers\Admin\Akun;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Akun\Pasien;
use App\Models\User;

class PasienController extends Controller
{
    public function index()
    {
        $data = [
            "pasien" => Pasien::orderBy("tanggal_daftar", "DESC")->get()
        ];
        
        return view("admin.Akun.Pasien.pendaftaran_pasien",$data);
    }
    public function store(Request $request)
    {
        // User::create($request->all());
        $user = new User();

        $user["nama"] = $request["nama"];
        $user["username"] = $request["username"];
        $user["email"] = $request["email"];
        $user["umur"] = $request["umur"];
        $user["alamat"] = $request["alamat"];
        $user["password"] = bcrypt("password");
        $user["role_id"] = 6;

        $user->save();

        $pasien = new pasien();

        $pasien["kode_pasien"] = date("YmdHis");  
        $pasien["nik"] = $request["nik"];
        $pasien["tanggal_lahir"] = $request["tanggal_lahir"];
        $pasien["pekerjaan"] = $request["pekerjaan"];
        $pasien["tanggal_daftar"] = date("Ymd");
        $pasien["nama_suami"] = $request["nama_suami"];
        $pasien["nomor_hp"] = $request["nomor_hp"];
        $pasien["user_id"] = $user->id;

        $pasien->save();

        return back();
    }
    
    public function update(Request $request, $user_id)
    {
        User::where("id", $user_id)->update([
            "nama"=> $request->nama,
            "username"=> $request->username,
            "email"=> $request->email,
            "umur"=> $request->umur,
            "alamat"=> $request->alamat,
        ]);
        Pasien::where("user_id", $user_id)->update([
            "nik"=> $request->nik,
            "tanggal_lahir"=> $request->tanggal_lahir,
            "pekerjaan"=> $request->pekerjaan,
            "nama_suami" => $request->nama_suami,
            "nomor_hp"=> $request->nomor
        ]);

        return back();
    }
    public function destroy($user_id){
        $user = Pasien::where("user_id", $user_id)->first();

        $user->delete();

        User::where("user_id",$user_id)->delete();

        return back();
    }
}

