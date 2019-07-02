<?php

namespace App\Http\Controllers;

use Auth;
use App\UserProfiles;
use App\Http\Requests\UsersProfileRequest;

class UserProfilesController extends Controller
{
    //

    public function getUserProfile()
    {
        $carrent_user_id = Auth::id();
        $userdata = UserProfiles::where('user_id', $carrent_user_id)->count();
        $result = $this->showCreateForm($userdata, $carrent_user_id);
        return $result;
    }

    public function showCreateForm($userdata, $carrent_user_id)
    {   
        //ユーザーデータがあるかないかで処理を変える
        if($userdata === 0){
            return view('profile', ['userdata' => $userdata]);
        } else {
            $users_profile = UserProfiles::where('user_id', $carrent_user_id)->get();
            return view('profile', ['userdata' => $userdata, 'users_profile' => $users_profile]);
        }
    }

    public function create(UsersProfileRequest $request)
    {
        $carrent_user_id = Auth::id();
        
        $users_profile = UserProfiles::updateOrCreate([
            'user_id'       => $carrent_user_id
        ], [
            'user_id'       => $carrent_user_id,
            'name'          => $request->name,
            'profile'       => $request->profile,
            'favorite_spot' => $request->favorite_spot,
            'user_img'      => $request->user_img,
        ]); 

        $users_profile = UserProfiles::where('user_id', $carrent_user_id)->get();
        return view('mypage', [
                'users_profile' => $users_profile
        ]);
    }
}
