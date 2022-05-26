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
<form action="{{ route('members.destroy', $member->id) }}" method="post">
    @csrf
    @method('delete')
    <input class="membersShow-deleteBtn" type="submit" value="この会員を削除する&#xf1f8;">
</form>
@endsection