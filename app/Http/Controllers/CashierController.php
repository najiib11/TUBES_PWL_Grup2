<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CashierController extends Controller
{
    public function index(){
        $products = Product::all();
        return view("cashier" ,compact("products"));
    }

    public function tambahData(Request $request){
        $data = Product::create($request->all());
        if($data){
            return redirect()->route("kasir.index")->with(["success" => "Data Berhasil di Simpan"]);
        }
        return redirect()->route("kasir.index")->with(["gagal" => "Data Gagal di Simpan"]);
    }

}
