@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="/css/data-container-style.css">
<link rel="stylesheet" href="/css/show-common-style.css">
@endsection

@section('title')
ISBN詳細
@endsection

@section('content')

<h1>ISBN詳細</h1>
@include('book_details.data', ["showEditBtn" => true])  
@endsection