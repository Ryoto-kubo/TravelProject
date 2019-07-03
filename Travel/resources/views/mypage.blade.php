@extends('layouts.app')

@section('content')
<h1>mypage</h1>
@foreach($users_profile as $user_profile)
    <p>{{ $user_profile->name }}</p>
    <p>{{ $user_profile->profile }}</p>
    <p>{{ $user_profile->favorite_spot }}</p>
    @if($user_profile->user_img == NULL)
        <img src="/storage/no_img.jpeg" alt="">
    @else
        <img src="/storage/{{ $user_profile->user_img }}" alt="">
    @endif
@endforeach
@endsection