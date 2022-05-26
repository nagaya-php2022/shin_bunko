@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="/css/data-container-style.css">
<link rel="stylesheet" href="/css/show-common-style.css">
<link rel="stylesheet" href="/css/confirm-style.css">
@endsection

@section('title')
資料詳細
@endsection

@section('content')

<h1>資料詳細</h1>
@include('books.data', ["showEditBtn" => true]) 
  <form id="deleteForm" action="{{ route('books.destroy', $book->id) }}" method="post">
    @csrf
    @method('delete')
    <button type="button" onclick="confirmDeletion()" class="booksShow-deleteBtn">
      この資料を廃棄する
      <i class="fas fa-trash"></i>
    </button>
    
  </form>
  
  @include('commons.confirm', ["formId" => "deleteForm"])
@endsection
