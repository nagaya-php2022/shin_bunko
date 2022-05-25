@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="/css/data-container-style.css">
@endsection

@section('title')
isbn詳細
@endsection

@section('content')

<h1>isbn詳細</h1>
@include('book_details.data')  
@endsection