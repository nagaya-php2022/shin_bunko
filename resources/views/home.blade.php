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
   
   <a class="home-link clickable" href="/rentals/edit">
      返却
      <div class="home-iconContainer">
         <img src="/img/book-return.svg" alt="">
      </div>
   </a>
   <a class="home-link clickable" href="{{ route('rentals.create') }}">
      貸出
      <div class="home-iconContainer">
         <img src="/img/book-rental.svg" alt="">
      </div>
   </a>
   <a class="home-link clickable" href="{{ route('members.create') }}">
      会員登録
      <div class="home-iconContainer">
         <img src="/img/new-member.svg" alt="">
      </div>
   </a>
   <a class="home-link clickable" href="{{ route('books.create') }}">
      資料登録
      <div class="home-iconContainer">
         <img src="/img/new-book.svg" alt="">
      </div>
   </a>
   <a class="home-link clickable" href="{{ route('book_details.create') }}">
      ISBN登録
      <div class="home-iconContainer">
         <img src="/img/new-isbn.svg" alt="">
      </div>
   </a>
   
</div>
@endsection