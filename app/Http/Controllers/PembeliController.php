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
    public function viewInputPembeli($name_product, $cost_product, $stok){
        // dd($name_product);
        return view("pembeli.input", ["name" => $name_product, "price" => $cost_product, "stok" => $stok]);
    }
    public function inputPembelian(Request $request, $name_product){
        $transaction = new Transaction();
        $transactionItem = new TransactionItem();

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
                $transactionItem->product_id = $products->id;
                $transactionItem->quantity = $request->quantity;
                $transaction->total = $products->price * $transactionItem->quantity;
                $transactionItem->price = $transaction->total;
                $stock = intval($transactionItem->product->stock);
                $kuantitas = intVal($request->quantity);
                $stock -= $kuantitas;
                Product::where(["name" => $request->name])->update(["stock" => strVal($stock)]);
            }
        }

        $transaction->save();
        $transactionItem->transaction_id = $transaction->id;
        $transactionItem->save();

        if($transaction){
            return redirect()->route('pembeli.index')->with(['success' => "Barang tersebut berhasil dipesan"]);
        }
        dd("Gagal");
    }
}
