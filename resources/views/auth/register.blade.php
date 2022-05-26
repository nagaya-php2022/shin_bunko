@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="/css/login-style.css">
@endsection

@section('content')
<h1>新規登録</h1>
<div class="login-container">
    @include('commons.flash')
    <form action="{{ route('register') }}" method="post">
        @csrf
        <label for="name">
            氏名<br>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
        </label><br>
        <label for="password">
            パスワード<br>
            <input type="password" name="password" id="password" value="">
        </label><br>
        <label for="password_confirmation">
            パスワード確認<br>
            <input type="password" name="password_confirmation" id="password_confirmation" value="">
        </label><br>
        
        <div class="login-buttons">
            <a class="clickable btn login-registerLink" href="{{ route('login') }}">キャンセル</a>
            <input class="clickable orange-btn" type="submit" value="確認">
        </div>
        
    </form>
</div>
@endsection