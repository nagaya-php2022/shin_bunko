@extends('layouts.app')

@section('title')
ISBN登録
@endsection
@section('content')

<h1>ISBN登録</h1>
@include('commons.flash')
<form method="POST" action="{{route('book_details.store')}}">
    @csrf
    <label>ISBN番号<br>
        <input type="number" name="isbn" value="{{ old('isbn') }}">
    </label><br>
    <label>資料名<br>
        <input type="text" name="name" value="{{ old('name') }}">
    </label><br>
    <label>分類コード<br>
        <input type="number" name="group_code" value="{{ old('group_code') }}">
    </label><br>
    <label>著者<br>
        <input type="text" name="author" value="{{ old('author') }}">
    </label><br>
    <label>出版社<br>
        <input type="text" name="publisher" value="{{ old('publisher') }}">
    </label><br>
    <label>出版日<br>
        <input type="date" name="published_at" value="{{ old('published_at') }}">
    </label><br>

    <input type="submit" value="保存">
</form>
@endsection