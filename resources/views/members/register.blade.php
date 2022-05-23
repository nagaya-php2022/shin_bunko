@extends('layouts.app')

@section('title')
会員登録
@endsection
@section('content')
@include('members.data')
<h1>会員登録</h1>
<form method="POST" action="{{route('register')}}">
  <label>氏名</br>
    <input type="text" name="name" value="{{$member->name}}">
  </label></br>
  <label>住所</br>
    <input type="text" name="adress" value="{{$member->adress}}">
  </label></br>
  <label>電話番号</br>
    <input type="tel" name="tel" value="{{$member->adress}}"></label></br>
  <label>メールアドレス</br>
    <input type="text" name="email" value="{{$member->email}}"></label></br>
  <label>生年月日</br>
    <input type="date" name="birthday" value="{{$member->birthday}}"></label></br>
                
  <input type="submit" value="保存">
</form>
@endsection