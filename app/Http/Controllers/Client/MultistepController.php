<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\UserDetail;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

class MultistepController extends Controller
{
    public function index()
    {
        $user_detail = UserDetail::where('user_id', auth()->user()->id)->latest()->first();
        if (!$user_detail) {
            $user_detail = new UserDetail();
            $user_detail->user_id = auth()->user()->id;
            $user_detail->step = 1;
            $user_detail->save();
        }
        return view("multiStep.multistep", compact("user_detail"));
    }

    public function step1(Request $request)
    {
        try {
            $user_detail = UserDetail::where('user_id', auth()->user()->id)->latest()->first();
            $user_detail->name = $request->name;
            $user_detail->date_of_birth = $request->date_of_birth;
            $dob = Carbon::parse($request->date_of_birth);
            $age = $dob->age;
            $user_detail->age = $age;
            $user_detail->address = $request->address;
            $user_detail->state_id = $request->state_id;
            $user_detail->district_id = $request->district_id;
            $user_detail->pincode = $request->pincode;
            $user_detail->caste = $request->caste;
            $user_detail->religion = $request->religion;
            $user_detail->update();
            return redirect()->back()->with("success", "Record saved successfully");
        } catch (Exception $ex) {
            return redirect()->back()->with("error", "Error while saving the records");
        }
    }
    public function step2(Request $request)
    {
        try {
            $user_detail = UserDetail::where('user_id', auth()->user()->id)->latest()->first();
            $user_detail->matric_school_name = $request->matric_school_name;
            $user_detail->matric_passing_year = $request->matric_passing_year;
            $user_detail->matric_board_name = $request->matric_board_name;
            $user_detail->matric_percentage = $request->matric_percentage;
            $user_detail->inter_school_name = $request->inter_school_name;
            $user_detail->inter_passing_year = $request->inter_passing_year;
            $user_detail->inter_board_name = $request->inter_board_name;
            $user_detail->inter_percentage = $request->inter_percentage;
            $user_detail->update();
            return redirect()->back()->with("success", "Record saved successfully");
        } catch (Exception $ex) {
            return redirect()->back()->with("error", "Error while saving the records");
        }
    }
    public function step3(Request $request)
    {
        try {
            $user_detail = UserDetail::where('user_id', auth()->user()->id)->latest()->first();
            $user_detail->confirmed_by_user = $request->confirmed_by_user == true ? 1 : 0;
            $user_detail->update();
            return redirect()->back()->with("success", "Record saved successfully");
        } catch (Exception $ex) {
            return redirect()->back()->with("error", "Error while saving the records");
        }
    }

    public function update_step1($id)
    {
        $user_detail = UserDetail::find($id);
        if (!$user_detail) {
            return redirect()->back()->with("Invalid request");
        }
        try {
            $user_detail->step = 2;
            $user_detail->step_1_updated_at = Carbon::now();
            $user_detail->update();
            return redirect()->back()->with("success", "Record saved successfully");
        } catch (Exception $ex) {
            return redirect()->back()->with("error", "Error while saving the records");
        }
    }
    public function update_step2($id)
    {
        $user_detail = UserDetail::find($id);
        if (!$user_detail) {
            return redirect()->back()->with("Invalid request");
        }
        try {
            $user_detail->step = 3;
            $user_detail->step_2_updated_at = Carbon::now();
            $user_detail->update();
            return redirect()->back()->with("success", "Record saved successfully");
        } catch (Exception $ex) {
            return redirect()->back()->with("error", "Error while saving the records");
        }
    }
    public function update_step3($id)
    {
        $user_detail = UserDetail::find($id);
        if (!$user_detail) {
            return redirect()->back()->with("Invalid request");
        }

        try {
            $user_detail->step = 4;
            $user_detail->step_3_updated_at = Carbon::now();
            $user_detail->update();
            return redirect()->back()->with("success", "Record saved successfully");
        } catch (Exception $ex) {
            return redirect()->back()->with("error", "Error while saving the records");
        }
    }
}
