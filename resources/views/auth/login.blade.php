@extends('layouts.app')
@section('title')
ログイン
@endsection
@section('content')
<form method="POST" action="{{route('login')}}">
  @csrf
  <label>
    ID</br>
    <input type="text" name="id" value="{{old('id')}}">
  </label></br>
  <label>
    パスワード</br>
    <input type="password" name="pass" value="">
  </label></br>

  <a href="{{route('register')}}">職員登録</a>
  <input type="submit" value="ログイン">
</form>
@endsection