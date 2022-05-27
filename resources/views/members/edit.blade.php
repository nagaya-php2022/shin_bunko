@extends('layouts.app')

@section('title')
会員編集
@endsection

@section('style')
<link rel="stylesheet" href="/css/create-common-style.css">
@endsection

@section('content')

<h1>会員編集</h1>

<div class="create-container">
  <form method="POST" action="{{route('members.update',$member->id) }}">
      @csrf
      @method('patch')
      @include('commons.flash')    
    <p><label>氏名<span class="create-required-caption">必須</span><br>
      <input type="text" name="name" value="{{$member->name}}" class="orange-input">
      <span class="create-description">（スペースなし）</span>
    </label></p>
    <p><label>住所<span class="create-required-caption">必須</span><br>
      <input type="text" name="address" value="{{$member->address}}" class="orange-input">
    </label></p>
    <p><label>電話番号<span class="create-required-caption">必須</span><br>
      <input type="tel" name="tel" value="{{$member->tel}}" class="orange-input">
      <span class="create-description">（ハイフンなし 半角数字）</span>
    </label></p>
    <p><label>メールアドレス<br>
      <input type="email" name="email" value="{{$member->email}}" class="orange-input">
    </label></p>
    <p><label>生年月日<span class="create-required-caption">必須</span><br>
      <input type="date" name="birthday" value="{{$member->birthday}}" class="orange-input">
    </label></p>

  <input type="submit" value="保存" class="orange-btn">
  </form>
</div>
@endsection