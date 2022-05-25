@extends('layouts.app')

@section('title')
isbn登録
@endsection
@section('content')

<h1>isbn登録</h1>
<form method="POST" action="{{route('book_details.create')}}">
    @csrf
    <label>ISBN番号</br>
        <input type="number" name="isbn" value="">
    </label></br>
    <label>資料名</br>
        <input type="text" name="name" value="">
    </label></br>
    <label>分類コード</br>
        <input type="number" name="group_code" value="">
    </label></br>
    <label>著者</br>
        <input type="text" name="author" value="">
    </label></br>
    <label>出版社</br>
        <input type="text" name="publisher" value="">
    </label></br>
    <label>出版日</br>
        <input type="date" name="published_at" value="">
    </label></br>

    <input type="submit" value="保存">
</form>
@endsection