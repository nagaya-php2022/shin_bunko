@extends('layouts.app')

@section('title')
資料登録
@endsection

@section('content')

<h1>資料登録</h1>
@include('commons.flash')
<form method="POST" action="{{route('books.store')}}">
    @csrf
    <label>ISBN番号<br>
    <input type="number" name="isbn" value="{{ old('isbn') }}"></label><br>
    <label>入荷年月日<br>
    <input type="date" name="stocked_at" value="{{ old('stocked_at') }}"></label><br>
    <label>備考<br>
    <textarea name="memo" value="{{ old('memo') }}"></textarea></label><br>

    <input type="submit" value="保存">
</form>
@endsection
