@extends('layouts.app')

@section('title')
会員登録
@endsection

@section('style')
<link rel="stylesheet" href="/css/create-common-style.css">
@endsection

@section('content')

<h1>会員登録</h1>

<div class="create-container">
  <form method="POST" action="{{route('members.store')}}">
    @csrf
    @include('commons.flash')
    <p><label>氏名<span class="create-required-caption">必須</span><br>
      <input type="text" name="name" value="{{ old('name') }}" placeholder="例）山田花子" class="orange-input">
      <span class="create-description">（スペースなし）</span>
    </label></p>
    <p><label>住所<span class="create-required-caption">必須</span><br>
      <input type="text" name="address" value="{{ old('address') }}" placeholder="例）東京都新宿区1-1" class="orange-input">
    </label></p>
    <p><label>電話番号<span class="create-required-caption">必須</span><br>
      <input type="tel" name="tel" value="{{ old('tel') }}" placeholder="例）08012345678" class="orange-input">
      <span class="create-description">（ハイフンなし 半角数字）</span>
    </label></p>
    <p><label>メールアドレス<br>
      <input type="email" name="email" value="{{ old('email') }}" placeholder="例）abc@shinjuku.com" class="orange-input">
    </label></p>
    <p><label>生年月日<span class="create-required-caption">必須</span><br>
      <input type="date" name="birthday" value="{{ old('birthday') }}" class="orange-input">
    </label></p>
                  
    <input type="submit" value="保存" class="orange-btn">
  </form>
</div>
@endsection