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
        $stock = null;
        $check_product = Product::where("name", $request->name);
        if($check_product){
            $check_product->update(["stock" => $request->stock]);
        }
        else{
            $product = Product::create($request->all());
            $productId =  Product::where("name", $request->name)->pluck("id");
            $stockProduct = Product::where("name", $request->name)->pluck("stock");
            $stock = Product::find($productId[0])->StockMovement()->create([
            "product_id" => $productId[0],
            "quantity" => $stockProduct[0],
        ]);
        }  
        return redirect()->back()->with(["success-save" => "Data berhasil disimpan"]);
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
