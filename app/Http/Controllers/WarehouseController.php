<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\StockMovement;
use App\Models\Product;

class WarehouseController extends Controller
{
    public function index(){
        return view("warehouse", ["product" => Product::all()]);
    }

    public function inputData(){
        return view("warehouse.input");
    }

    public function saveData(Request $request){
        $product = null;
        $check_product = Product::where("name", $request->name);
        if(empty(($check_product->pluck("id"))[0])){
            $product = Product::create($request->all());
            return redirect()->route("gudang.index")->with(["success-save" => "Data berhasil disimpan"]);
        }
        return redirect()->route('gudang.index')->with(["gagal-save" => "Data sudah ada"]);
        
    }

    public function editData(){
        return view("warehouse.edit", ["product" => Product::all()]);
    }

    public function saveEdit(Request $request){
        $data = Product::where(["name" => $request->name])->update([
            "name" => $request->name,
            "price" => $request->price,
            "stock" => $request->stock,
            "tgl_kadaluarsa" => $request->tgl_kadaluarsa
        ]);
        if($data){
            return redirect()->route('gudang.index')->with(["success-edit" => "Perubahan data berhasil diterapkan"]);
        }
        return redirect()->route('gudang.index')->with(["fail-edit" => "Perubahan data gagal diterapkan"]);

    }

}
