@extends('layouts.app')

@section('content')
<h1>職員登録</h1>
@include('commons.flash')
<form action="{{ route('register') }}" method="post">
    @csrf
    <p>
        <label for="name">氏名</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}">
    </p>
    <p>
        <label for="password">パスワード</label>
        <input type="password" name="password" id="password" value="">
    </p>
    <p>
        <label for="password_confirmation">パスワード確認</label>
        <input type="password" name="password_confirmation" id="password_confirmation" value="">
    </p>
    <a href="{{ route('login') }}">キャンセル</a>
    <input type="submit" value="確認">
</form>
@endsection