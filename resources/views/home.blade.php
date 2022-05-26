@extends('layouts.app')

@section("style")
<link rel="stylesheet" href="/css/home-style.css">
@endsection

@section('title')
ホーム
@endsection
@section('content')
<h1>ホーム</h1>
<div class="home-linkContainer">
   
   <a class="home-link" href="/rentals/edit">返却</a><br>
   <a class="home-link" href="{{ route('rentals.create') }}">貸出</a><br>
   <a class="home-link" href="{{ route('members.create') }}">会員登録</a><br>
   <a class="home-link" href="{{ route('books.create') }}">資料登録</a><br>
   <a class="home-link" href="{{ route('book_details.create') }}">ISBN登録</a><br>
   
</div>
@endsection