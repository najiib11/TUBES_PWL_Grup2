<?php

namespace App\Http\Controllers;

use App\Models\TransactionItem;
use Illuminate\Http\Request;

class CashierController extends Controller
{
    public function index(){
        $transactionItem = TransactionItem::all();
        return view("cashier" ,compact("transactionItem"));
    }

    public function tambahData(Request $request){
        $data = Product::create($request->all());
        if($data){
            return redirect()->route("kasir.index")->with(["success" => "Data Berhasil di Simpan"]);
        }
        return redirect()->route("kasir.index")->with(["gagal" => "Data Gagal di Simpan"]);
    }

}
