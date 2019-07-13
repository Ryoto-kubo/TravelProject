<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\TravelPlan;
use Illuminate\Http\Request;
use App\Http\Requests\TravelPlansRequest;

class TravelPlansController extends Controller
{
    public function showTravelPlan()
    {
        return view('travelplan');
    }

    public function nullCheck($request_img){
        if($request_img !== NULL)
        {
            // オリジナルのnameを取得
            $file_name = $request_img->getClientOriginalName();
            // 画像を「Storage/app/public」に保存する
            // storeAsを「images」に変えれば「Storage/app/images」となる
            $filepath = $request_img->storeAs('public',$file_name);
            return $file = str_replace('public/', '', $filepath);
        } else {
            return $file = $request_img;
        }
    }

    public function createTravelPlan(TravelPlansRequest $request)
    {
        $carrent_user_id = Auth::id();
        $carrent_user = User::find($carrent_user_id);

        // travelplansTABLEのインスタンス生成
        $travelplan = new TravelPlan();

        $travelplan->title        = $request->title;
        $travelplan->introduction = $request->introduction;
        $travelplan->price        = $request->price;
        $travelplan->area         = $request->area;
        $travelplan->place        = $request->place;
        $travelplan->travel_img01 = $this->nullCheck($request->travel_img01);
        $travelplan->travel_img02 = $this->nullCheck($request->travel_img02);
        $travelplan->travel_img03 = $this->nullCheck($request->travel_img03);
        $travelplan->travel_img04 = $this->nullCheck($request->travel_img04);
        $travelplan->travel_img05 = $this->nullCheck($request->travel_img05);
        
        $carrent_user->travelplan()->save($travelplan);

        return redirect('/travel/plan/create/list');
    }

    public function createCheck(Request $request)
    {
        var_dump(public_path());
        // $filename = Session::get('file_name');
        // var_dump($filename);
        // $title = $request->old('title');
        // var_dump($file);
        return view('travelplancheck');
    }
}
