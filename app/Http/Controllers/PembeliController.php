<?php

namespace App\Http\Controllers;


use App\Models\TransactionItem;
use App\Models\Transaction;
use App\Models\Store;
use App\Models\User;
use App\Models\Product;



use Illuminate\Http\Request;
class PembeliController extends Controller
{
    public function viewPembeli(){
        return view("pembeli", ["product" => Product::all()]);
    }
    public function viewInputPembeli($name_product){
        return view("pembeli.input", ["name" => $name_product]);
    }
    public function inputPembelian(Request $request, $name_product){
        $transaction = new Transaction();
        $store = Store::where(["id" => 1])->get(); 
        $user = User::where(["id" => 1])->get();
        $product = Product::where(["name" => $request->name])->get();

        foreach($store as $stores){
            if($stores->id){
                $transaction->store_id = $stores->id;
            }
        }

        foreach($user as $users){
            if($users->id){
                $transaction->user_id = $users->id;
            }
        }

        foreach($product as $products){
            if($products){
                $transaction->total = $products->price * $products->stock;
            }
        }

        $transaction->save();
        if($transaction){
            
        }
    }
}
