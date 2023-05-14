<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Energy extends Model
{
    use HasFactory;

    public function store(){
        return $this->hasMany(Store::class, 'energy_id', 'id');
    }
}
