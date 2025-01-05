<?php

namespace App\Http\Controllers;

use App\Models\Staf;
use Illuminate\Http\Request;

class KepalaTokoController extends Controller
{
    public function index(){
        return view("kepala_toko");
    }

    public function inputDataStaf(){
        return view("kepala_toko.input-staf", );
    }

    public function inputDataProses(Request $request){
        $data = Staf::create($request->all());
        if($data){
            return redirect()->route("kasir.index")->with(["success" => "Data Berhasil di Simpan"]);
        }
        return redirect()->route("kasir.index")->with(["gagal" => "Data Gagal di Simpan"]);
    }
}
