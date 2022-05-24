@extends('layouts.app')

@section('title')
貸出詳細

@section('content')

<h1>貸出詳細</h1>
    <dl>
        <dt>貸出日</dt>
        <dd>{{ $rental->created_at }}</dd>
        <dt>返却日</dt>
        <dd>{{ $rental->returned_at }}</dd>
    </dl>
    @include('books.data')  
    @include('members.data') 
    @include('staff.data')
@endsection