<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//マイページ
Route::get('/mypage', 'MyPageController@show')->name('mypage');

//マイトラベルプラン一覧
Route::get('/travel/plan/create/list', 'MyTravelPlanListController@show')->name('mytravelplan');

//プロフィール編集
Route::get('/profile/create', 'UserProfilesController@getUserProfile')->name('profile.create');
Route::post('/profile/create', 'UserProfilesController@create');

//旅行プラン登録
Route::get('/travel/plan/create', 'TravelPlansController@showTravelPlan')->name('travel.plan.create');
Route::post('/travel/plan/create', 'TravelPlansController@createTravelPlan');
Route::get('/travel/plan/check', 'TravelPlansController@createCheck')->name('travel.plan.check');
