<?php

namespace App\Http\Controllers\Autentikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view ("autentikasi.login");
    }

    public function post_login(Request $request){
        if (Auth::attempt([
            "username" => $request->username,
            "password" => $request->password
        ])){
            $request->session()->regenerate();
            
            return redirect("/dashboard");
        }else{
            return back();
        }
    }
}
