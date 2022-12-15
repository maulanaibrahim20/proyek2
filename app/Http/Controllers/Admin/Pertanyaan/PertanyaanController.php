<?php

namespace App\Http\Controllers\Admin\Pertanyaan;

use App\Http\Controllers\Controller;
use App\Models\Perawatan\Pertanyaan;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function index()
    {
        $pertanyaan=[
            "pertanyaan" => Pertanyaan::orderBy("id", "ASC")->get()
        ];

        return view ("admin.pertanyaan.pertanyaan",$pertanyaan);
    }

    public function store(Request $request)
    {
        $pertanyaan = new Pertanyaan();
        $pertanyaan['pertanyaan'] = $request["nama_keluhan"];
        $pertanyaan->save();

        return back();
    }

    public function update(Request $request)
    {
        Pertanyaan::where("id", $request)->update([
            "nama_keluhan"=> $request->nama_keluhan,
        ]);

        return back();
    }

    public function destroy($id){
        $pertanyaan = Pertanyaan::where("id", $id)->first();

        $pertanyaan->delete();

        return back();
    }
}
