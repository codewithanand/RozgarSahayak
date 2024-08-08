<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\PersonalInformation;
use Exception;
use Illuminate\Http\Request;

use App\Models\State;

class RozgarFormController extends Controller
{
    public function index()
    {
        $states = State::all();
        return view("client.employment.index", compact("states"));
    }

    public function store(Request $request)
    {
        try {
            $pif = new PersonalInformation();
            $pif->name = $request->name;
            $pif->fathersName = $request->fathersName;
            $pif->mobile = $request->mobile;
            $pif->gender = $request->gender;
            $pif->email = $request->email;
            $pif->status = $request->status;
            $pif->age = $request->age;
            $pif->qualification = $request->qualification;
            $pif->state_code = $request->state_code;
            $pif->district_code = $request->district_code;
            $pif->religion = $request->religion;
            $pif->caste = $request->caste;
            $pif->jobExperience = $request->jobExperience;
            $pif->govJobVsPrivate = $request->govJobVsPrivate;
            $pif->startupExperience = $request->startupExperience;
            $pif->privateCompaniesRole = $request->privateCompaniesRole;
            $pif->save();
            return redirect()->back()->with('success', 'Form submitted!');

        } catch (Exception $ex) {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
