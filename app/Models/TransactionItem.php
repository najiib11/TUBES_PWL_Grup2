<?php

namespace App\Models;

use App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class TransactionItem extends Model
{
    protected $table = "transaction_items";

    protected $fillable = [
        "store_id",
        "product_id",
        "quantity",
        "price",
    ];

    public function User(){
        return $this->belongsTo(Product::class, "product_id");
    }


}
