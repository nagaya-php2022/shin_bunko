@extends('layouts.app')

@section('title')
会員登録
@endsection
@section('content')
<h1>会員登録</h1>
@include('commons.flash')
<form method="POST" action="{{route('members.store')}}">
  @csrf
  <label>氏名<br>
    <input type="text" name="name" value="{{ old('name') }}">
  </label><br>
  <label>住所<br>
    <input type="text" name="address" value="{{ old('address') }}">
  </label><br>
  <label>電話番号<br>
    {{-- <p>ハイフンなしで入力してください。</p> --}}
    <input type="tel" name="tel" value="{{ old('tel') }}">
  </label><br>
  <label>メールアドレス<br>
    <input type="email" name="email" value="{{ old('email') }}">
  </label><br>
  <label>生年月日<br>
    <input type="date" name="birthday" value="{{ old('birthday') }}">
  </label><br>
                
  <input type="submit" value="保存">
</form>
@endsection