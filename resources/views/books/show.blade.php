@extends('layouts.app')

@section('title')
資料詳細
@endsection

@section('content')

<h1>資料詳細</h1>
@include('books.data') 
  <form action="{{ route('books.destroy', $book->id) }}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="この資料を廃棄する">
  </form>
@endsection