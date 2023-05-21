<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable,HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
    ];

    public function role(){
        return $this->belongsTo(Role::class,'role_id','id');
    }

    //type: 1-deposit 2- trading cost 3-withdraw
    //mode: 1-add 0-decline
    public function balance($price,$mode="0", $type=1,$orderId=null, $remark=null){
        try{
            if($mode){
                $this->account_balance = $this->account_balance + $price;
            }
            else{
                if($this->account_balance < $price){
                    return false;
                }
                $this->account_balance = $this->account_balance - $price;
            }
            $this->save();
            $balance = new Balance();
            $balance->money = $price;
            $balance->order_id = $orderId;
            $balance->type = $type;
            $balance->remark = $remark;
            $balance->user_id = $this->id;
            $balance->save();
            return true;
        }
        catch (\Exception $e){
            return false;
        }


    }

}
