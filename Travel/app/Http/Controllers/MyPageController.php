<?php

namespace App\Http\Controllers;

use Auth;
use App\UserProfiles;
use Illuminate\Http\Request;

class MyPageController extends Controller
{
    //
    public function show()
    {   
        $carrent_user = Auth::id();
        $users_profile = UserProfiles::where('user_id', $carrent_user)->get();
        return view('mypage', [
                'users_profile' => $users_profile
        ]);
    }
}
