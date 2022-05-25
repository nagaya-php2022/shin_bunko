@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="/css/data-container-style.css">
<link rel="stylesheet" href="/css/show-common-style.css">
@endsection

@section('title')
会員詳細
@endsection

@section('content')

<h1>会員詳細</h1>
@include('members.data', ["showEditBtn" => true]) 
@endsection