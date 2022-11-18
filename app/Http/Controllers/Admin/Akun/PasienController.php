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
            "pasien" => Pasien::orderBy("created_at", "DESC")->get()
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

        $bidan = new Pasien();

        $bidan["nik"] = $request["nik"];
        $bidan["nomor_hp"] = $request["nomor_hp"];
        $bidan["user_id"] = $user->id;

        $bidan->save();

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
            "nomor_hp"=> $request->nomor
        ]);

        return back();
    }
    public function destroy($user_id){
        $user = Pasien::where("user_id", $user_id)->first();

        $user->delete();

        User::where("id",$user_id)->delete();

        return back();
    }
}

