<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;    
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Staf extends Model
{
    protected $table = "stafs";
    protected $fillable = [
        "id_user",
        "penjualan",
        "rating"
    ];

    public function user(){
        return $this->belongsTo(User::class, "id_user");
    }
}
