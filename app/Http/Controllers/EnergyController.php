<?php

namespace App\Http\Controllers;

use App\Models\Energy;
use Illuminate\Http\Request;

class EnergyController extends Controller
{
    public function getEnergyList(Request $request)
    {
        $data = Energy::query()->get()->toArray();

        return $this->success([
            $data,
        ]);
    }
}
