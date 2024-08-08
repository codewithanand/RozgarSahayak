<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\District;

class AddressController extends Controller
{
    public function getDistrict($stateCode)
    {
        $districts = District::where('state_code', $stateCode)->get();
        return response()->json($districts);
    }
}
