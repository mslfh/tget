<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManageController extends Controller
{
    //
    public function getAllUser(Request $request)
    {
        $role_id = $request->get("roleId");
        $pageSize = $request->get("limit")??10;

        if($role_id == 0){
            $data = User::query()->paginate($pageSize)->toArray();
        }
        else{
            $data = User::query()->where('role_id',$role_id)->paginate($pageSize)->toArray();
        }
        $total = $data['total'];
        $list = $data['data'];
        return $this->success( [
            'total'=>$total,
                "list" =>$list
            ]
        );

    }

    public function addNewUser(Request $request)
    {
        $data = $request->post();

        $user = new User();

        $user->name = $data['name'];
        $user->role_id = $data['role_id'];
        $user->status = $data['status'];
        $user->email = $data['email'];
        $user->password = $data['password']??'12345abc';
        $user->profile_photo_path = $data['profile_photo_path']??null;
        $user->postal_addr = $data['postal_addr']??null;

        $user->save();
        return $this->success( $user
        );


    }

    public function removeUser(Request $request)
    {

        $data = $request->post();
        $user = User::query()->find($data['user_id']);
        $user->delete();
        return $this->success( "delete successfully");
    }

    public function changeUserStatus(Request $request)
    {
        $data = $request->post();
        $user = User::query()->find($data['user_id']);
        $user->status = $data['status'];

        $user->save();
        return $this->success( $data);
    }

}
