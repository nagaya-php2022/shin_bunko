@extends('layouts.app')

@section('title')
ISBN編集
@endsection
@section('content')

@section('style')
<link rel="stylesheet" href="/css/create-common-style.css">
@endsection

<h1>ISBN編集</h1>

<div class="create-container">
    <form method="POST" action="{{route('book_details.update',$book_detail->isbn) }}">
        @csrf
        @method('patch')
        @include('commons.flash')
        <p><label>ISBN番号<span class="create-required-caption">必須</span><br>
            <input type="number" name="isbn" value="{{$book_detail->isbn}}" class="orange-input">
            <span class="create-description">（半角数字）</span>
        </label></p>
        <p><label>資料名<span class="create-required-caption">必須</span><br>
            <input type="text" name="name" value="{{$book_detail->name}}" class="orange-input">
        </label></p>
        <p><label>分類コード<span class="create-required-caption">必須</span><br>
            <input type="number" name="group_code" value="{{$book_detail->group_code}}" class="orange-input">
            <span class="create-description">（半角数字）</span>
        </label></p>
        <p><label>著者<span class="create-required-caption">必須</span><br>
            <input type="text" name="author" value="{{$book_detail->author}}" class="orange-input">
            <span class="create-description">（スペースなし）</span>
        </label></p>
        <p><label>出版社<span class="create-required-caption">必須</span><br>
            <input type="text" name="publisher" value="{{$book_detail->publisher}}" class="orange-input">
        </label></p>
        <p><label>出版日<span class="create-required-caption">必須</span><br>
            <input type="date" name="published_at" value="{{$book_detail->published_at}}" class="orange-input">
        </label></p>

        <input type="submit" value="保存" class="orange-btn">
    </form>
</div>
@endsection