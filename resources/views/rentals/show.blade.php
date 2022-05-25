@extends('layouts.app')

@section('title')
貸出詳細
@endsection

@section('style')
<link rel="stylesheet" href="/css/data-container-style.css">
<link rel="stylesheet" href="/css/rental-show-style.css">
@endsection

@section('content')
<div class="rentalShow">
    <h1>貸出詳細</h1>
    
    <dl class="rentalShow-DateInfo">
        <dt>貸出日</dt>
        <dd>{{ $rental->created_at }}</dd>
        <dt>返却日</dt>
        <dd>{{ $rental->returned_at }}</dd>
    </dl>
    
    <h2>貸出資料</h2>
    @include('books.data')  
    
    <h2>利用会員</h2>
    @include('members.data') 
    
    <h2>担当職員</h2>
    @include('staff.data')
</div>

@endsection