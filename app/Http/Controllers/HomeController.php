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
        return view("home");
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
        $user = Auth::user();
        $data = $request->post();

        if(isset($user->id)){
            $user->name = isset($data['name'])? $data['name'] :$user->name;
            $user->password = isset($data['password'])? bcrypt($data['password']):$user->password;
            $user->postal_addr = isset($data['postal_addr'])? $data['postal_addr'] :$user->postal_addr;
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

}
