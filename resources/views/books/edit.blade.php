@extends('layouts.app')

@section('title')
資料編集
@endsection
@section('content')

<h1>資料編集</h1>
@include('commons.flash')
<form method="POST" action="{{route('books.update',$book->id) }}">
    @csrf
    @method('patch')
    <label>
        ISBN番号<br>
        <input type="text" name="isbn" value="{{$book->isbn}}">
    </label></br>
    <label>
        入荷年月日</br>
        <input type="date" name="stocked_at" value="{{$book->stocked_at}}">
    </label></br>
    <label>
        廃棄年月日</br>
        <input type="date" name="wasted_at" value="{{$book->wasted_at}}">
    </label></br>
    <label>
        備考</br>
        <input type="text" name="memo" value="{{$book->memo}}">
    </label></br>

 <input type="submit" value="保存">
</form>
@endsection