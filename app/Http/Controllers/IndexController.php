<?php

namespace App\Http\Controllers;


use App\Models\Energy;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $data = Energy::query()->get()->toArray();

        return view("home")->with([
            'role_id'=>$user->role_id??0, //0 is visitor
            "energy_list"=>$data
        ]);
    }


    public function tradingIndex(Request $request)
    {
        $user =  Auth::user();

        $pageSize = $request->get('pageSize',6);

        $key = $request->get("keywords");
        $list = Energy::query();

        if($key){
            $list->where('type',$key)->orWhere('zone',$key);

        }
        $list = $list->paginate($pageSize);

        foreach ( $list as $index=> $li){
            $li->price = $average_price = Store::query()->where(
                'energy_id',$li->id
            )->average('selling_price');
            $li->vol = $average_price = Store::query()->where(
                'energy_id',$li->id
            )->max('current_volume');
            $li->time = $li->created_at->format("d/m/Y");
        }
        $Energy = Energy::query()->select('id','title')->with(['records'=>function($q){
            $q->orderBy("created_at",'desc')->limit(1);
        }])->get()->toArray();

        return view('trading', compact('list'))->with([
            'role_id' => $user->role_id??0,
            'Energy' => $Energy,
        ]);
    }

}
