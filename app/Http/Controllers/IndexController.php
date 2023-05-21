<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view("home")->with([
                'role_id'=>$user->role_id??0 //0 is visitor
        ]);
    }
}
