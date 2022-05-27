@extends('layouts.app')

@section('title')
資料編集
@endsection

@section('style')
<link rel="stylesheet" href="/css/create-common-style.css">
@endsection

@section('content')

<h1>資料編集</h1>

<div class="create-container">
    <form method="POST" action="{{route('books.update',$book->id) }}">
        @csrf
        @method('patch')
        @include('commons.flash')
        <p><label>ISBN番号<span class="create-required-caption">必須</span><br>
            <input type="text" name="isbn" value="{{$book->isbn}}" class="orange-input">
            <span class="create-description">（半角数字）</span>
        </label></p>
        <p><label>入荷年月日<span class="create-required-caption">必須</span><br>
            <input type="date" name="stocked_at" value="{{$book->stocked_at}}" class="orange-input">
        </label></p>
        <p><label>備考<br>
            <input type="text" name="memo" value="{{$book->memo}}" class="orange-input">
        </label></p>

        <input type="submit" value="保存" class="orange-btn">
    </form>
</div>
@endsection