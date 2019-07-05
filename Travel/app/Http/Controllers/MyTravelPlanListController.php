<?php

namespace App\Http\Controllers;

use Auth;
use App\TravelPlan;
use Illuminate\Http\Request;

class MyTravelPlanListController extends Controller
{
    public function show()
    {
        $carrent_user_id = Auth::id();
        $myTravelPlans = TravelPlan::where('user_id', $carrent_user_id)->get();
        return view('mytravelplan', [
                    'myTravelPlans' => $myTravelPlans
        ]);
    }
}
