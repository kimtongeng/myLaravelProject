<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckOut extends Model
{
    // use HasFactory;
    protected $table = "check_outs";

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function watch(){
        return $this->belongsTo(Watch::class);

    }

}
