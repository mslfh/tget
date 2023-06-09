<?php

namespace App\Http\Controllers;

use App\Models\Energy;
use App\Models\EnergyRecord;
use App\Models\MarketSetting;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class MasterTradingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {

        $MarketSetting = MarketSetting::query()->find(1);

        $fee = [
            "tax" => $MarketSetting->tax,
            "administration_fee" => $MarketSetting->administration_fee,
        ];
        $energyList = $this->getEnergyList($request)->getData()->data->list;
        $tradingHistory = $this->getTradingHistory($request)->getData()->data;
        return view('masterTrading')->with(
            [
                "fee"=>$fee,
                "energyList"=>$energyList,
                "tradingHistory"=>$tradingHistory,
                "role_id"=>Auth::user()->role_id??0,
            ]
        );
    }

    public function getServiceFee(Request $request)
    {
        $MarketSetting = MarketSetting::find(1);

        $data = [
            "tax" => $MarketSetting->tax,
            "administration_fee" => $MarketSetting->administration_fee,
        ];
        return $this->success($data);
    }

    public function updateFee(Request $request)
    {
        $MarketSetting = MarketSetting::find(1);

        $data = $request->post();
        $MarketSetting->tax = $data['tax']??$MarketSetting->tax ;
        $MarketSetting->administration_fee = $data['administration_fee']??$MarketSetting->administration_fee ;
        $MarketSetting->save();
        return $this->success($data);
    }

    public function getEnergyList(Request $request)
    {
        $data =  Energy::query()->get()->toArray();

        return $this->success([
            'list' => $data,
        ]);
    }
    public function addNewEnergy(Request $request)
    {
        $path = null;
        if($request->file('image')){
            $filePath ='public/EnergyImg/'.date('Y-m-d');

            $path = $request->file('image')->store(
                $filePath
            );
            $path = "storage/".explode('/',$path,2)[1];
        }

        $data = $request->post();
        $energy = new Energy();

        $energy->title = $data['title'] ??"";
        $energy->image = $path;
        $energy->description = $data['description'] ??"";
        $energy->type = $data['type'] ??"";
        $energy->zone = $data['zone'] ??"";
        $energy->save();
        $energy->records()->create([
            "market_price" =>  $data ['market_price']
        ]);
        return $this->success( $energy );
    }
    public function updateEnergy(Request $request)
    {

        $path = null;
        if($request->file('Image')){
            $filePath ='public/EnergyImg/'.date('Y-m-d');

            $path = $request->file('Image')->store(
                $filePath
            );
            $path = "storage/".explode('/',$path,2)[1];
        }

        $data = $request->post();
        $energyId = $request->get('id');
        $energy = Energy::query()->find($energyId);
        if($energy){
            $energy->title = $data['title'] ??$energy->title;
            $energy->image = $data['image'] ??$energy->image;
            $energy->description = $data['description'] ??$energy->description;
            $energy->type = $data['type'] ??$energy->type;
            $energy->image = $path??$energy->image;
            $market_price = EnergyRecord::query()->where(
                'energy_id',$energy->id
            )->orderBy('updated_at',"desc")->limit(1)->get()->first();
            $market_price = $market_price->market_price??0;
            if( $data ['market_price'] != $market_price){
                $energy->records()->create([
                    "market_price" =>  $data ['market_price']
                ]);
            }

            $energy->save();


            return $this->success( $energy );
        }
        else{
            return $this->error("not found");
        }
    }
    public function uploadEnergyImage(Request $request)
    {
        $data = $request->post();
        $energyId = $request->get('id');
        $energy = Energy::query()->find($energyId);
        if($energy){
            $energy->image = $data['image'] ??$energy->image;
            $energy->save();
            return $this->success( $energy );
        }
        else{
            return $this->error("not found");
        }
    }

    public function deleteEnergy(Request $request)
    {
        $energyId = $request->get('id');

        if($energyId){
            Energy::query()->find($energyId)->delete();
            return $this->success();
        }
        else{
            return $this->error("not found");
        }
    }


    public function getEnergyDetail(Request $request)
    {
        $energyId = $request->get('id');

        if($energyId){
            $energy = Energy::query()->find($energyId);
            $market_price = EnergyRecord::query()->where(
                'energy_id',$energy->id
            )->orderBy('updated_at',"desc")->limit(1)->get()->first();
            $energy->market_price = $market_price->market_price??0;
            return $this->success($energy);
        }
        else{
            return $this->error("not found");
        }
    }

    public function getTradingHistory(Request $request)
    {
        $data  = Order::query()->with([
            "buyer:id,name,profile_photo_path",
            "seller:id,name,profile_photo_path",
            "store" => function ( $query){
                $query->select('id','energy_id')->with("energy:id,title,image,type");
            },
        ])->get();
        return $this->success($data);
    }

    public function getOrderDetail(Request $request)
    {
        $orderId = $request->get('id');
        $data  = Order::query()->where('id',$orderId)
        ->with([
            'buyer',
            'seller',
            "store" => function ( $query){
                $query->select('id','energy_id')->with("energy:id,title,image,type");
            },
        ])->first();

        return $this->success($data);

    }
}
