<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Models\Balance;
use App\Models\Energy;
use App\Models\EnergyRecord;
use App\Models\MarketSetting;
use App\Models\Order;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function submitOrder(Request $request)
    {
        $user = Auth::user();
        $data = $request->post();
        DB::beginTransaction();
        try{
            $order = new Order();

            //check store
            $store = Store::query()->find($data['store_id']);

            //create order
            $order->buyer_id = $user->id ?? 1;
            $order->seller_id = $data['seller_id'];
            $order->volume = $data['volume'];
            $order->remark = $data['remark'];
            $order->store_id = $store->id;

            $market_set = MarketSetting::query()->find(1);

            $order->tax = $market_set->tax;
            $order->administration_fee = $market_set->administration_fee;

            $average_price = Store::query()->where(
                'energy_id',$store->energy_id
            )->average('selling_price');

            $trade_price = $average_price * $data['volume'] + $market_set->administration_fee
            + ($average_price * $data['volume'])*$market_set->tax/100;


            $market_price = EnergyRecord::query()->where('energy_id',$store->energy_id)
                ->orderBy('created_at','desc')->limit(1);

            $market_price = $market_price->first()->market_price;

            $order->market_price = $market_price;
            $order->average_price = $average_price;
            $order->trading_price = $trade_price;
            $order->order_no = 'O'.$store->location.time();
            $order->save();

            //change money of buyer

            $Info = "Buy ".$data['volume']." kWh of ".$store->energy->title." : ".$trade_price;
            if($data['remark']){
                $Info .= "(".$data['remark'].")";
            }
               if(! $user->balance($trade_price,0,2,$order->id,$Info)) {
                   return $this->error("Fail in getting money from buyer");
               }

            //change money of seller

            $seller  = User::query()->find($data['seller_id']);
           $price = $trade_price - $market_set->administration_fee;
            $Info = "Sell ".$data['volume']." kWh of ".$store->energy->title." : ".$price;
            if(! $seller->balance($price,1,2,$order->id,$Info)) {
                return $this->error("Fail in adding money of seller");
            }

            //change store
            $store->current_volume = $store->current_volume - $data['volume'];
            $store->save();

            DB::commit();
            return $this->success($order);
        }
        catch (\Exception $exception){
            DB::rollBack();
            return $this->error("error");
        }

    }

    public function submitEnergy(Request $request)
    {
        $user = Auth::user();
        $data = $request->post();

        $store = Store::query()->where([
            "seller_id" => $user->id,
            "energy_id" => $data['energy_id'],
            "selling_price" => $data['selling_price'],
            "location" => $data['location'],
        ])->first();

        if($store){
            $store->total_volume += $data['volume'];
            $store->current_volume += $data['volume'];
            $store->save();
        }
        else {
            $store = new Store();
            $store->seller_id = $user->id;
            $store->energy_id = $data['energy_id'];
            $store->selling_price = $data['selling_price'];
            $store->total_volume = $data['volume'];
            $store->current_volume = $data['volume'];
            $store->location = $data['location'];
            $store->save();
        }
        return $this->success($store);
    }

    public function energyDetail(Request $request)
    {
        $energyId = $request->get('id');
        $energy = Energy::query()->find($energyId);

        if($energy){
            $price = Store::query()->where(
                'energy_id',$energyId
            )->average('selling_price');

            $storeList = Store::query()->where(
                'energy_id',$energyId
            )->with('seller:id,name')->get();

            $tax = MarketSetting::query()->find(1)->toArray();

            $energy->price = $price;
            return view("energyDetail")->with([
                'energy'=>$energy->toArray(),
                'storeList'=>$storeList->toArray(),
                'tax'=>$tax,
            ]);
        }
        else{
            return $this->error("energy not found");
        }
    }
}
