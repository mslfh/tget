<?php

namespace App\Models;

use Carbon\Carbon;
use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function buyer(){
        return $this->belongsTo(User::class,'buyer_id','id');
    }

    public function seller(){
        return $this->belongsTo(User::class,'seller_id','id');
    }
    public function store(){
        return $this->hasOne(Store::class,'id','store_id');
    }

}
