@extends('layouts.app')

@section('content')
<h1>資料検索</h1>
<!--検索フォーム-->
    <form action="{{ route('books.search') }}" method="get"><!--データの送信先の入力-->
        <input type="number" name="book_id" id="book_id" placeholder="資料ID">
        <button type="submit"><i class="fas fa-search"></i></button>
    </form>

<!--検索結果表示-->
<table class="table"><!--テーブルのクラス名確認-->
    <thead>
        <tr>
            <th>資料ID</th>
            <th>タイトル</th>
            <th>著者</th>
            <th>出版社</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $book) <!--booksテーブルのデータを引っ張ってくる-->
            <tr>
                <td>{{ $book->id }}</td>
                <td><a href="{{ route('books.show', $book->id) }}">{{ $book->book_detail->name }}</a></td>
                <td>{{ $book->book_detail->author }}</td>
                <td>{{ $book->book_detail->publisher }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection