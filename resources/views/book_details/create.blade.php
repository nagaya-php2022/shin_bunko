@extends('layouts.app')

@section('title')
isbn登録
@endsection
@section('content')

<h1>isbn登録</h1>
<form method="POST" action="">
    <label>ISBN番号</br>
        <input type="number" name="isbn" value="{{$book_detail->isbn}}">
    </label></br>
    <label>資料名</br>
        <input type="text" name="name" value="{{$book_detail->name}}">
    </label></br>
    <label>分類コード</br>
        <input type="number" name="group_code" value="{{$book_detail->group_code}}">
    </label></br>
    <label>著者</br>
        <input type="text" name="author" value="{{$book_detail->author}}">
    </label></br>
    <label>出版社</br>
        <input type="text" name="publisher" value="{{$book_detail->publisher}}">
    </label></br>
    <label>出版日</br>
        <input type="date" name="published_at" value="{{$book_detail->published_at}}">
    </label></br>

    <input type="submit" value="保存">
</form>
@endsection