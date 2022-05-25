@extends('layouts.app')

@section('title')
会員登録
@endsection
@section('content')
<h1>会員登録</h1>
<form method="POST" action="{{route('members.store')}}">
  @csrf
  <label>氏名</br>
    <input type="text" name="name" value="">
  </label></br>
  <label>住所</br>
    <input type="text" name="address" value="">
  </label></br>
  <label>電話番号</br>
    <input type="tel" name="tel" value="">
  </label></br>
  <label>メールアドレス</br>
    <input type="email" name="email" value="">
  </label></br>
  <label>生年月日</br>
    <input type="date" name="birthday" value="">
  </label></br>
                
  <input type="submit" value="保存">
</form>
@endsection