<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\StockMovement;

class Product extends Model
{
    protected $table = "products";
    protected $fillable = [
        "name",
        "price",
        "stock",
        "tgl_pembelian"
    ];

    public function StockMovement(){
        return $this->hasOne(StockMovement::class);
    }
}
