<?php

namespace App\Http\Controllers\Admin\Akun;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Akun\Pasien;

class PasienController extends Controller
{
    public function index()
    
    {
        $data = [
            "pasien" => Pasien::get()
        ];
        
        return view("admin.Akun.Pasien.pendaftaran_pasien",$data);
    }
    // public function store(Request $request)
    // {
    //     // User::create($request->all());
    //     $user = new User();
    //     $user["nama"] = $request["nama"];
    //     $user["username"] = $request["username"];
    //     $user["email"] = $request["email"];
    //     $user["umur"] = $request["umur"];
    //     $user["alamat"] = $request["alamat"];
    //     $user["password"] = bcrypt("password");
    //     $user["role_id"] = 5;

    //     $user->save();

    //     $bidan = new Bidan();

    //     $bidan["nomor_hp"] = $request["nomor"];
    //     $bidan["user_id"] = $user->id;

    //     $bidan->save();

    //     return back();
    // }
    
    // public function update(Request $request, $user_id)
    // {
    //     User::where("id", $user_id)->update([
    //         "nama"=> $request->nama,
    //         "username"=> $request->username,
    //         "email"=> $request->email,
    //         "umur"=> $request->umur,
    //         "alamat"=> $request->alamat,
    //     ]);
    //     Bidan::where("user_id", $user_id)->update([
    //         "nomor_hp"=> $request->nomor,
    //     ]);

    //     return back();
    // }
    // public function destroy($user_id){
    //     $user = Bidan::where("user_id", $user_id)->first();

    //     $user->delete();

    //     User::where("id",$user_id)->delete();

    //     return back();
    // }
}
