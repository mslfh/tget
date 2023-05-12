<?php

namespace App\Http\Controllers;

use App\Models\Energy;
use App\Models\MarketSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MasterTradingController extends Controller
{
    public function getServiceFee(Request $request)
    {
        $MarketSetting = MarketSetting::find(1);

        $data = [
            "tax" => $MarketSetting->tax,
            "administration_fee" => $MarketSetting->administration_fee,
        ];
        return $this->success($data);
    }


    public function updateTaxFee(Request $request)
    {
        $MarketSetting = MarketSetting::find(1);

        $data = $request->post();
        if(isset($data['tax'])){
            $MarketSetting->tax = $data['tax'];
            $MarketSetting->save();
            return $this->success($data);
        }
        else{
            return $this->error("not found");
        }
    }

    public function updateAdminFee(Request $request)
    {
        $MarketSetting = MarketSetting::find(1);

        $data = $request->post();
        if(isset($data['administration_fee'])){
            $MarketSetting->administration_fee = $data['administration_fee'];
            $MarketSetting->save();
            return $this->success($data);
        }
        else{
            return $this->error("not found");
        }
    }


    public function getEnergyList(Request $request)
    {
        $pageSize = $request->get('pageSize',10);

        $data = Energy::query()->paginate($pageSize)->toArray();
        return $this->success([
            'list' => $data['data'],
            'current_page' => $data['current_page'],
            'total' => $data['total']
        ]);
    }
    public function addNewEnergy(Request $request)
    {
        $data = $request->post();

        $energy = new Energy();

        $energy->title = $data['title'] ??"";
        $energy->image = $data['image'] ??"";
        $energy->description = $data['description'] ??"";
        $energy->type = $data['type'] ??"";

        $energy->save();
        return $this->success( $energy );
    }
    public function updateEnergy(Request $request)
    {
        $data = $request->post();
        $energyId = $request->get('id');
        $energy = Energy::query()->find($energyId);
        if($energy){
            $energy->title = $data['title'] ??$energy->title;
            $energy->image = $data['image'] ??$energy->image;
            $energy->description = $data['description'] ??$energy->description;
            $energy->type = $data['type'] ??$energy->type;
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


    public function getEnergyDetai(Request $request)
    {
        $energyId = $request->get('id');

        if($energyId){
            $energy = Energy::query()->find($energyId);
            return $this->success($energy);
        }
        else{
            return $this->error("not found");
        }
    }

}
