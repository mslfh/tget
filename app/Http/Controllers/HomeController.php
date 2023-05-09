<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        Auth::user();

        $role = 'buyer';

        return view('home',[
            "status" => 1,
            "data" => [
                'role' => $role
            ]
        ]);
    }



    public function getUserInfo(Request $request)
    {

        $userId = $request->get('userId');

        $data = User::find($userId);

        if($data){
            $status =1;
        }
        else{
            $status =0;
        }
        return [
            "status" => $status,
            "data" =>$data
        ];
    }
}
