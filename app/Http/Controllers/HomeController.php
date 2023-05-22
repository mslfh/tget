<?php

namespace App\Http\Controllers;

use App\Models\Balance;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        return view("home")->with([
            'role_id'=>$user->role_id]
        );
    }

    public function getRole(Request $request)
    {

        $user = Auth::user();
        if(isset($user->role->role_name)){
            $role = $user->role->role_name;
            return $this->success( $role
            );
        }
        else{
            return $this->error("role not find");
        }

    }

    public function getUserStatus(Request $request)
    {

        $user = Auth::user();
        return $this->success([ "status" => $user->status]);
    }

    public function getUserInfo(Request $request)
    {

        $user = Auth::user();
        if(isset($user->id)){
            return $this->success(
                $user
            );
        }
        else{
            return $this->error("user not find");
        }
    }

    public function updateUser(Request $request)
    {

        $path = null;
        if($request->file('userImage')){
            $filePath ='public/userImage/'.date('Y-m-d');

            $path = $request->file('userImage')->store(
                $filePath
            );
            $path = "storage/".explode('/',$path,2)[1];
        }


        $user = Auth::user();
        $data = $request->post();

        if(isset($user->id)){
            $user->name = isset($data['name'])? $data['name'] :$user->name;
            $user->role_id = isset($data['role_id'])? $data['role_id'] :$user->role_id;
            $user->zone = isset($data['zone'])? $data['zone'] :$user->zone;
            $user->password = isset($data['password'])? bcrypt($data['password']):$user->password;
            $user->postal_addr = isset($data['postal_addr'])? $data['postal_addr'] :$user->postal_addr;
            $user->profile_photo_path = $path? $path :$user->profile_photo_path;
            $user->save();
            return $this->success(
                $user
            );
        }
        else{
            return $this->error("user not find");
        }
    }

    public function changePicture(Request $request)
    {
        $user = Auth::user();
        $data = $request->post();

        if(isset($user->id)){
            $user->profile_photo_path = isset($data['profile_photo_path'])? $data['profile_photo_path'] :$user->profile_photo_path;
            $user->save();
            return $this->success(
                $user->profile_photo_path
            );
        }
        else{
            return $this->error("user not find");
        }
    }

    public function getTradingHistory(Request $request)
    {
        $user = Auth::user();
        $data = $request->all();
        if(isset($user->id)){

            if($data['type'] == 1){
                $list = Balance::query()->where([
                    "user_id" => $user->id,
                ])->get();
            }
            elseif($data['type'] == 2){
                $list = Balance::query()->where([
                    "user_id" => $user->id,
                    "type" => 2,
                ])->get();
            }
            elseif ($data['type'] == 3){
                $list = Balance::query()->where([
                    "user_id" => $user->id,
                ])->whereIn('type',[1,3])->get();
            }
            else{
                $list=null;
            }
            return $this->success($list);
        }
        else{
            return $this->error("user not find");
        }
    }

    public function changeMoney(Request $request)
    {
        $user = Auth::user();

        $data = $request->post();

        if($data['type'] == "save"){
            $user->balance($data['money'],1,1,null,"user save money of ".$data['money']);
        }
        else{
            $user->balance($data['money'],0,3,null,"user withdraw money of ".$data['money']);
        }
        return $this->success("successfully"
        );
    }

    public function profile(Request $request)
    {
        $user = Auth::user();
        $type = $request->get('type')??1;

        if($type == 1){
            $list = Balance::query()->where([
                "user_id" => $user->id,
            ])->get();
        }
        elseif($type== 2){
            $list = Balance::query()->where([
                "user_id" => $user->id,
                "type" => 2,
            ])->get();
        }
        elseif ($type == 3){
            $list = Balance::query()->where([
                "user_id" => $user->id,
            ])->whereIn('type',[1,3])->get();
        }
        else{
            $list=[];
        }

        return view("profile")->with([
            'tradingHistory' => $list
        ]);
    }

}
