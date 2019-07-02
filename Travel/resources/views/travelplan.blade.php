@extends('layouts.app')

@section('content')
    <p>旅行プラン登録</p>
    <form class="create-form" method="post" action="/travel/plan/create" enctype="multipart/form-data">
    @csrf
    
    @if($errors->has('title'))
        <span class="error-msg">{{ $errors->first('title') }}</span>
    @endif
    <div>
        <input type="text" class="input" name="title" placeholder="プラン名">
    </div>

    @if($errors->has('introduction'))
        <span class="error-msg">{{ $errors->first('introduction') }}</span>
    @endif
    <div>
        <textarea type="text" class="input" name="introduction" placeholder="プラン紹介"></textarea>
    </div>

    @if($errors->has('price'))
        <span class="error-msg">{{ $errors->first('price') }}</span>
    @endif
    <div>
        <input type="number" class="input" name="price" placeholder="お値段">
    </div>

    @if($errors->has('area'))
        <span class="error-msg">{{ $errors->first('area') }}</span>
    @endif
    <div>
        地方:
        <select size="1" name="area" >
            <option value="北海道地方">北海道地方</option>
            <option value="東北地方">東北地方</option>
            <option value="関東地方">関東地方</option>
            <option value="中部地方">中部地方</option>
            <option value="近畿地方">近畿地方</option>
            <option value="中国地方">中国地方</option>
            <option value="四国地方">四国地方</option>
            <option value="九州地方">九州地方</option>
        </select>
    </div>

    @if($errors->has('place'))
        <span class="error-msg">{{ $errors->first('place') }}</span>
    @endif
    <div>
        県:
        <select size="1" name="place">
            <option value="北海道">北海道</option>
            <option value="青森">青森</option>
            <option value="岩手">岩手</option>
            <option value="宮城">宮城</option>
            <option value="秋田">秋田</option>
            <option value="山形">山形</option>
            <option value="福島">福島</option>
            <option value="茨城">茨城</option>
            <option value="栃木">栃木</option>
            <option value="東京">東京</option>
            <option value="群馬">群馬</option>
            <option value="埼玉">埼玉</option>
            <option value="千葉">千葉</option>
            <option value="東京">東京</option>
            <option value="神奈川">神奈川</option>
            <option value="新潟">新潟</option>
            <option value="富山">富山</option>
            <option value="石川">石川</option>
            <option value="福井">福井</option>
            <option value="山梨">山梨</option>
            <option value="長野">長野</option>
            <option value="岐阜">岐阜</option>
            <option value="静岡">静岡</option>
            <option value="愛知">愛知</option>
            <option value="三重">三重</option>
            <option value="滋賀">滋賀</option>
            <option value="京都">京都</option>
            <option value="大阪">大阪</option>
            <option value="兵庫">兵庫</option>
            <option value="奈良">奈良</option>
            <option value="和歌山">和歌山</option>
            <option value="鳥取">鳥取</option>
            <option value="島根">島根</option>
            <option value="岡山">岡山</option>
            <option value="広島">広島</option>
            <option value="山口">山口</option>
            <option value="徳島">徳島</option>
            <option value="香川">香川</option>
            <option value="愛媛">愛媛</option>
            <option value="高知">高知</option>
            <option value="福岡">福岡</option>
            <option value="佐賀">佐賀</option>
            <option value="長崎">長崎</option>
            <option value="熊本">熊本</option>
            <option value="大分">大分</option>
            <option value="宮崎">宮崎</option>
            <option value="鹿児島">鹿児島</option>
            <option value="沖縄">沖縄</option>
        </select>
    </div>

    <!-- @if($errors->has('category'))
        <span class="error-msg">{{ $errors->first('category') }}</span>
    @endif
    <div>
        旅行日程:
        <select size="1" name="category">
            <option value="日帰り">日帰り</option>
            <option value="一泊二日">一泊二日</option>
            <option value="二泊三日">二泊三日</option>
            <option value="三泊四日">三泊四日</option>
            <option value="長期">長期</option>
        </select>
    </div> -->

    @if($errors->has('travel_img01'))
        <span class="error-msg">{{ $errors->first('travel_img01') }}</span>
    @endif
    <div>
        <input type="file" class="input" name="travel_img01">
    </div>

    @if($errors->has('travel_img02'))
        <span class="error-msg">{{ $errors->first('travel_img02') }}</span>
    @endif
    <div>
        <input type="file" class="input" name="travel_img02">
    </div>

    @if($errors->has('travel_img03'))
        <span class="error-msg">{{ $errors->first('travel_img03') }}</span>
    @endif
    <div>
        <input type="file" class="input" name="travel_img03">
    </div>

    @if($errors->has('travel_img04'))
        <span class="error-msg">{{ $errors->first('travel_img04') }}</span>
    @endif
    <div>
        <input type="file" class="input" name="travel_img04">
    </div>

    @if($errors->has('travel_img05'))
        <span class="error-msg">{{ $errors->first('travel_img05') }}</span>
    @endif
    <div>
        <input type="file" class="input" name="travel_img05">
    </div>

    <button　type="submit">送信</button>
    </form>
@endsection