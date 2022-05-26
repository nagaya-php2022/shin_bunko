@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="/css/data-container-style.css">
<link rel="stylesheet" href="/css/show-common-style.css">
<link rel="stylesheet" href="/css/confirm-style.css">
@endsection

@section('title')
会員詳細
@endsection

@section('content')

<h1>会員詳細</h1>
@include('members.data', ["showEditBtn" => true]) 
<form id="deleteForm" action="{{ route('members.destroy', $member->id) }}" method="post">
    @csrf
    @method('delete')
    <button type="button" onclick="confirmDeletion()" class="membersShow-deleteBtn">
      この会員を削除する
      <i class="fas fa-trash"></i>
    </button>
    
  </form>
  
  @include('commons.confirm', ["formId" => "deleteForm"])
@endsection