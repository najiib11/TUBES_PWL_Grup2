<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class StockMovement extends Model
{
    protected $table = "stock_movements";

    protected $fillable = [
        "product_id",
        "quantity",
        "type",
        "create_at",
        "update_at",
    ];

    public function Product(){
        return $this->belongsTo(Product::class);
    }
}
