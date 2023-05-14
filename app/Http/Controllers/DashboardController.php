<?php

namespace App\Http\Controllers;

use App\Models\Energy;
use App\Models\Order;
use App\Models\Store;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function getActiveUserSummary(Request $request)
    {
        $users = User::query()->get();

        $users = $users->groupBy('postal_addr');
        $data=[];
        foreach ($users as $index=>$group){
            $data[] = [
                    "postal_addr" => $index,
                    "total_user" =>$group->count()
            ];
        }
        return $this->success($data
        );

    }

    public function getMarketSummary(Request $request)
    {
        $energies = Energy::query()->select('id','type','title','image')
            ->with([
                'store'
            ])
            ->get();
        foreach ($energies as $index=>$energy){
            $total_vol = $energy->store->count('current_volume')??0;
            $avg_price = $energy->store->average('selling_price')??0;
            $energy->total_volume = $total_vol;
            $energy->avg_price = $avg_price;
            unset($energy->store);
        }
        return $this->success($energies
        );

    }

    public function getPriceHistory(Request $request)
    {

        $numDays = $request->get('numDays')??2;
        $energyType = $request->get('energyType')??null;


        $current = Carbon::tomorrow();
        $begin = Carbon::tomorrow();
        $begin->subDays($numDays);

        $stores = Store::query()
            ->select('energy_id','selling_price',"created_at")
            ->with([
                'energy:id,title,type'
            ])
            ->where([
                [ "created_at",">=",  date('Y-m-d H:i:s',$begin->getTimestamp())],
                [ "created_at","<=",date('Y-m-d H:i:s',$current->getTimestamp())]
            ]);
        if($energyType){
            $stores = $stores->whereHas(
                'energy',function($q) use($energyType){
                    $q->where('type',$energyType);
                }
            );
        }
        $stores =  $stores->orderBy("created_at",'desc')->get();
        $data = [];
        for ($numDay = $numDays; $numDay>0; $numDay--){
            $time = Carbon::tomorrow();
            $time->subDays($numDay);
            $item = $stores->where('created_at', '>=', date('Y-m-d H:i:s', $time->getTimestamp()));
            $time->addDay();
            $item = $item->where('created_at', '<=', date('Y-m-d H:i:s', $time->getTimestamp()));
            $data[$numDays - $numDay ]['date']= $time->toDateString();
            foreach ($item as $im )
                $data[$numDays - $numDay ]['energies'][] = $im;
        }
        return $this->success($data);

    }

    public function getTradingHistory(Request $request)
    {

        $numDays = $request->get('numDays')??2;
        $energyType = $request->get('energyType')??null;


        $current = Carbon::tomorrow();
        $begin = Carbon::tomorrow();
        $begin->subDays($numDays);

        $orders = Order::query()
            ->select('store_id','average_price',"volume",'tax','administration_fee','created_at')
            ->with([
                'store'=>function($q){
                    $q->select('id', 'energy_id')->with("energy:id,title,type,image");
                }
            ])
            ->where([
                [ "created_at",">=",  date('Y-m-d H:i:s',$begin->getTimestamp())],
                [ "created_at","<=",date('Y-m-d H:i:s',$current->getTimestamp())]
            ]);
        if($energyType){
            $orders = $orders->whereHas(
                'store',function($q) use($energyType){
                $q->whereHas('type',function($query) use($energyType){
                    $query->where('type',$energyType);
                });
            }
            );
        }
        $orders =  $orders->orderBy("created_at",'desc')->get();
        $data = [];
        for ($numDay = $numDays; $numDay>0; $numDay--){
            $time = Carbon::tomorrow();
            $time->subDays($numDay);
            $item = $orders->where('created_at', '>=', date('Y-m-d H:i:s', $time->getTimestamp()));
            $time->addDay();
            $item = $item->where('created_at', '<=', date('Y-m-d H:i:s', $time->getTimestamp()));
            $data[$numDays - $numDay ]['date']= $time->toDateString();
            foreach ($item as $im ){
                $price  = $im['average_price'] * $im['volume'] +  $im['administration_fee']
                    + ($im['average_price'] * $im['volume'])* $im['tax']/100;
                $data[$numDays - $numDay ]['tradings'][]=[
                    'price' => $price,
                    'energy' => $im->store->energy
                ];
            }
        }
        return $this->success($data);

    }

}
