<?php

namespace App\Http\Controllers;

use Auth;
use App\TravelPlan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show()
    {
        $carrent_user_id = Auth::id();
        $otherUserTravelPlans = TravelPlan::join('users', '<>', $carrent_user_id)->get();
        return view('home', [
                    'otherUserTravelPlans' => $otherUserTravelPlans
        ]);

    }

    public function index(){
        return view('home');
    }
}
