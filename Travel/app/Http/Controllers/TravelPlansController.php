<?php

namespace App\Http\Controllers;

use Auth;
use App\TravelPlan;
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
        
        // travelplansTABLEのインスタンス生成
        $travelplan = new TravelPlan();

        $travelplan->user_id      = $carrent_user_id;
        $travelplan->title        = $request->title;
        $travelplan->introduction = $request->introduction;
        $travelplan->price        = $request->price;
        $travelplan->area         = $request->area;
        $travelplan->place        = $request->place;
        $travelplan->travel_img01 = $request->travel_img01;
        $travelplan->travel_img02 = $request->travel_img02;
        $travelplan->travel_img03 = $request->travel_img02;
        $travelplan->travel_img04 = $request->travel_img04;
        $travelplan->travel_img05 = $request->travel_img05;

        $travelplan->save();
        return view('mypage');
    }
}
