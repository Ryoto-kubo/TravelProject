<?php

namespace App\Http\Controllers;

use Auth;
use App\TravelPlan;
use Illuminate\Http\Request;

class TopPageController extends Controller
{
    //
    public function show()
    {
        $carrent_user_id = Auth::id();
        $otherUserTravelPlans = TravelPlan::Join('users_profile', 'travelplans.user_id', '=', 'users_profile.user_id')
                                    ->whereNotIn('travelplans.user_id', [$carrent_user_id])
                                    ->get();
TravelPlan::join('users_profile', 'travelplans.user_id', '=', 'users_profile.user_id')->whereNotIn('travelplans.user_id', [3])->get();

        return view('top',[
                    'otherUserTravelPlans' => $otherUserTravelPlans
        ]);
    }
}
