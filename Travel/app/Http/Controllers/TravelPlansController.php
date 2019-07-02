<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\TravelPlansRequest;

class TravelPlansController extends Controller
{
    public function showTravelPlan()
    {
        return view('travelplan');
    }

    public function createTravelPlan(TravelPlansRequest $request)
    {
        $carrent_user_id = Auth::id();

        // TravelPlan::
    }
}
