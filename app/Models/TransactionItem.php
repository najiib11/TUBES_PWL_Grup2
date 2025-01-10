<?php

namespace App\Models;

use App\Models\User;

use Illuminate\Database\Eloquent\Model;

class TransactionItem extends Model
{
    protected $table = "transactions";

    protected $fillable = [
        "store_id",
        "user_id",
        "total",
        "tgl_pembelian",
    ];

    public function User(){
        return $this->belongsTo(User::class);
    }


}
