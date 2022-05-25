@extends('layouts.app')

@section('title')
会員編集
@endsection
@section('content')

<h1>会員編集</h1>
<form method="POST" action="{{route('members.update',$member->id) }}">
    @csrf
    @method('patch')
    
  <label>氏名</br>
    <input type="text" name="name" value="{{$member->name}}">
  </label></br>
  <label>住所</br>
    <input type="text" name="adress" value="{{$member->adress}}">
  </label></br>
  <label>電話番号</br>
    <input type="tel" name="tel" value="{{$member->adress}}">
  </label></br>
  <label>メールアドレス</br>
    <input type="email" name="email" value="{{$member->email}}">
  </label></br>
  <label>生年月日</br>
    <input type="date" name="birthday" value="{{$member->birthday}}">
  </label></br>

    <input type="submit" value="保存">
</form>
@endsection