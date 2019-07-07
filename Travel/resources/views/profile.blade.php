@extends('layouts.app')

@section('content')
<p>プロフィール編集</p>
<form class="create-form" method="post" action="/profile/create" enctype="multipart/form-data">
    @csrf

    @if($userdata > 0)
        @foreach($users_profile as $user_profile)
        @endforeach
    @endif

    @if($errors->has('name'))
        <span class="error-msg">{{ $errors->first('name') }}</span>
    @endif
    <div>
        <input type="text" class="input" name="name" value="{{ $userdata ? $user_profile->name : Auth::user()->name }}">
    </div>

    @if($errors->has('profile'))
        <span class="error-msg">{{ $errors->first('profile') }}</span>
    @endif
    <div>
        <input type="text" class="input" name="profile" value="{{ $userdata ? $user_profile->profile : null }}">
    </div>

    @if($errors->has('favorite_spot'))
        <span class="error-msg">{{ $errors->first('favorite_spot') }}</span>
    @endif
    <div>
        <input type="text" class="input" name="favorite_spot" value="{{ $userdata ? $user_profile->favorite_spot : null }}">
    </div>

    @if($errors->has('user_img'))
        <span class="error-msg">{{ $errors->first('user_img') }}</span>
    @endif
    <!-- <div class="over">
        <label for="user_img">
            <div class="drop">ファイルを選択
                <i aria-hidden="true" class="fas fa-plus fa-7x"></i>
                <input id="user_img" type="file" class="input js-img" name="user_img" value="{{ $userdata ? $user_profile->user_img : null }}">
            </div>
        </label>
    </div> -->
    <div class="over">
        <label for="file-sample">
            <div class="drop">
                <input class="input" id="file-sample" type="file">
                <i aria-hidden="true" class="fas fa-plus fa-7x"></i>
                <img class="img" id="file-preview">
            </div>
        </label>
    </div>
    
    <div id="img-load">
        <img-upload></img-upload>
    </div>
    <div><button type="submit">送信</button></div>
</form>
@endsection