@extends('layouts.app')

@section('content')

@foreach($otherUserTravelPlans as $otherUserTravelPlan)
<p>{{ $otherUserTravelPlan->name }}</p>
<p>{{ $otherUserTravelPlan->title }}</p>
<p>{{ $otherUserTravelPlan->introduction }}</p>
@endforeach
@endsection