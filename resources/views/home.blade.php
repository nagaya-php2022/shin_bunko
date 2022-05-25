@extends('layouts.app')

@section("style")
<link rel="stylesheet" href="/css/home-style.css">
@endsection

@section('content')
<h1>ホーム</h1>
<div class="home-linkContainer">
   
   <a class="home-link" href="">返却</a><br>
   <a class="home-link" href="">貸出</a><br>
   <a class="home-link" href="">会員登録</a><br>
   <a class="home-link" href="">資料登録</a><br>
   <a class="home-link" href="">職員登録</a><br>
   
</div>
@endsection