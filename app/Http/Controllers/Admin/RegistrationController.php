<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserDetail;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        $user_details = UserDetail::where('state_id', 20)->get();
        return view("admin.registration.index", compact("user_details"));
    }
}
