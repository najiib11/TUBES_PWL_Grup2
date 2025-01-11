<?php

namespace App\Models;

use App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'store_id',
        'user_id',
        'total'
    ];

    public function user(){
        return $this->belongsTo(User::class, "user_id");
    }


    
}
