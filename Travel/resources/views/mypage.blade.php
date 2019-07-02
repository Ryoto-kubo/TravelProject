@extends('layouts.app')

@section('content')
<h1>mypage</h1>
@foreach($users_profile as $user_profile)
    <p>{{ $user_profile->name }}</p>
    <p>{{ $user_profile->profile }}</p>
    <p>{{ $user_profile->favorite_spot }}</p>
@endforeach
@endsection