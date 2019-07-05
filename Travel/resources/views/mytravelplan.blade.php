@extends('layouts.app')

@section('content')

@foreach($myTravelPlans as $myTravelPlan)
<p>{{ $myTravelPlan->title }}</p>
<p>{{ $myTravelPlan->introduction }}</p>
<p>{{ $myTravelPlan->price }}</p>
<p>{{ $myTravelPlan->area }}</p>
<p>{{ $myTravelPlan->place }}</p>
<!-- <p>{{ $myTravelPlan->travel_img01 }}</p>
<p>{{ $myTravelPlan->area }}</p>
<p>{{ $myTravelPlan->area }}</p> -->
@endforeach
@endsection
