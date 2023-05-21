<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    /**
     * @var int|mixed
     */
    private $seller_id;

    public function energy(){
        return $this->hasOne(Energy::class,'id','energy_id');
    }
    public function seller(){
        return $this->belongsTo(User::class,'seller_id','id');
    }
}
