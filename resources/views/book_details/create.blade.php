@extends('layouts.app')

@section('title')
ISBN登録
@endsection

@section('style')
<link rel="stylesheet" href="/css/create-common-style.css">
@endsection

@section('content')

<h1>ISBN登録</h1>

<div class="create-container">
    <form method="POST" action="{{route('book_details.store')}}">
        @csrf
        @include('commons.flash')
        <p><label>ISBN番号<span class="create-required-caption">必須</span><br>
            <input type="number" name="isbn" value="{{ old('isbn') }}" placeholder="例）1111111111" class="orange-input">
            <span class="create-description">（半角数字）</span>
        </label></p>
        <p><label>資料名<span class="create-required-caption">必須</span><br>
            <input type="text" name="name" value="{{ old('name') }}" placeholder="例）シェイクスピア全集" class="orange-input">
        </label></p>
        <p><label>分類コード<span class="create-required-caption">必須</span><br>
            <input type="number" name="group_code" value="{{ old('group_code') }}" placeholder="例）9" class="orange-input">
            <span class="create-description">（半角数字）</span>
        </label></p>
        <p><label>著者<span class="create-required-caption">必須</span><br>
            <input type="text" name="author" value="{{ old('author') }}" placeholder="例）福田恒存" class="orange-input">
            <span class="create-description">（スペースなし）</span>
        </label></p>
        <p><label>出版社<span class="create-required-caption">必須</span><br>
            <input type="text" name="publisher" value="{{ old('publisher') }}" placeholder="例）新潮社" class="orange-input">
        </label></p>
        <p><label>出版日<span class="create-required-caption">必須</span><br>
            <input type="date" name="published_at" value="{{ old('published_at') }}" class="orange-input">
        </label></p>
        
        <input type="submit" value="保存" class="orange-btn">
    </form>
</div>
@endsection