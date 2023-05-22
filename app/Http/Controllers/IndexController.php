<?php

namespace App\Http\Controllers;


use App\Models\Energy;
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
}
