<?php

namespace App\Models;

use App\Models\User;
use App\Models\Store;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = "transactions";

    protected $fillable = [
        'store_id',
        'user_id',
        'total'
    ];

    public function user(){
        return $this->belongsTo(User::class, "user_id");
    }
    public function store(){
        return $this->belongsTo(Store::class, "user_id");
    }


    
}
