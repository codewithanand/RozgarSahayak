<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PersonalInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index()
    {
        $totalCount = PersonalInformation::count();
        $stateCount = PersonalInformation::distinct('state_code')->count('state_code');
        $ageAbove18Count = PersonalInformation::where('age', 'yes')->count();
        $fromJharkhandCount = PersonalInformation::where('state_code', 20)->count();

        // Fetch caste data
        $casteData = DB::table('personal_information')
            ->select('caste', DB::raw('count(*) as total'))
            ->groupBy('caste')
            ->get();

        // Fetch religion data
        $religionData = DB::table('personal_information')
            ->select('religion', DB::raw('count(*) as total'))
            ->groupBy('religion')
            ->get();

        return view("admin.dashboard", compact('totalCount', 'stateCount', 'ageAbove18Count', 'fromJharkhandCount', 'casteData', 'religionData'));
    }
}
