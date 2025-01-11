<?php

namespace App\Models;

use App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class TransactionItem extends Model
{
    protected $table = "transaction_items";

    protected $fillable = [
        "transaction_id",
        "product_id",
        "quantity",
        "price",
    ];

    public function product(){
        return $this->belongsTo(Product::class, "product_id");
    }

    public function transaction(){
        return $this->belongsTo(Transaction::class, "transaction_id");
    }



}
