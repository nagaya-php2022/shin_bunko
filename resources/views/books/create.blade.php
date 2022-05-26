@extends('layouts.app')

@section('title')
資料登録
@endsection

@section('style')
<link rel="stylesheet" href="/css/create-common-style.css">
@endsection

@section('content')

<h1>資料登録</h1>

<div class="create-container">
    <form method="POST" action="{{route('books.store')}}">
        @csrf
        @include('commons.flash')
        <p><label>ISBN番号<span class="create-required-caption">必須</span><br>
            <input type="number" name="isbn" value="{{ old('isbn') }}" placeholder="例）1111111111" class="orange-input">
            <span class="create-description">（半角数字）</span>
        </label></p>
        <p><label>入荷年月日<span class="create-required-caption">必須</span><br>
            <input type="date" name="stocked_at" value="{{ old('stocked_at') }}" class="orange-input">
        </label></p>
        <p><label>備考<br>
            <textarea name="memo" value="{{ old('memo') }}" class="orange-input"></textarea>
        </label></p>

        <input type="submit" value="保存" class="orange-btn">
    </form>
</div>
@endsection
