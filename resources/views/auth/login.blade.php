@extends('layouts.app')
@section('title')
ログイン
@endsection

@section('style')
<link rel="stylesheet" href="/css/login-style.css">
@endsection

@section('content')
<h1>ログイン</h1>

<div class="login-container">
  <form method="POST" action="{{route('login')}}">
    @csrf
    @include('commons.flash')
    <label>
      ID</br>
      <input type="text" name="name" value="{{old('id')}}">
    </label></br>
    <label>
      パスワード</br>
      <input type="password" name="password" value="">
    </label></br>
  
    <div class="login-buttons">
      <a class="clickable btn login-registerLink" href="{{route('register')}}">職員登録</a>
      <input class="clickable orange-btn" type="submit" value="ログイン">
    </div>
  </form>
</div>
@endsection