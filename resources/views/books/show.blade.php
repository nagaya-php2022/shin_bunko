@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="/css/data-container-style.css">
@endsection

@section('title')
資料詳細
@endsection

@section('content')

<h1>資料詳細</h1>
@include('books.data') 
  <form action="{{ route('books.destroy', $book->id) }}" method="post">
    @csrf
    @method('delete')
    <input class="booksShow-deleteBtn" type="submit" value="この資料を廃棄する&#xf1f8;">
  </form>
@endsection