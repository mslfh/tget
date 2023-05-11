<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function success( $data = array(),$msg = 'successfully', $code = 1)
    {
        return response()
            ->json([
                'status' => $code,
                'data' => $data,
                'msg' => $msg,
            ]);
    }

    public function error($msg = 'fail', $data = array(), $code = 0)
    {
        return response()
            ->json([
                'status' => $code,
                'data' => $data,
                'msg' => $msg,
            ]);
    }

}
