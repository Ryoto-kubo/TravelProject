@extends('layouts.app')

@section('content')

@foreach($myTravelPlans as $myTravelPlan)
<p>{{ $myTravelPlan->title }}</p>
<p>{{ $myTravelPlan->introduction }}</p>
<p>{{ $myTravelPlan->price }}</p>
<p>{{ $myTravelPlan->area }}</p>
<p>{{ $myTravelPlan->place }}</p>
<img src="/storage/{{ $myTravelPlan->travel_img01 }}" alt="">

@if($myTravelPlan->travel_img02)
    <img src="/storage/{{$myTravelPlan->travel_img02}}" alt="">
@endif

@if($myTravelPlan->travel_img03)
    <img src="/storage/{{$myTravelPlan->travel_img03}}" alt="">
@endif

@if($myTravelPlan->travel_img04)
    <img src="/storage/{{$myTravelPlan->travel_img04}}" alt="">
@endif

@if($myTravelPlan->travel_img05)
    <img src="/storage/{{$myTravelPlan->travel_img05}}" alt="">
@endif

@endforeach
@endsection
