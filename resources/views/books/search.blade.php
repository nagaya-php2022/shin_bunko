@extends('layouts.app')

@section("style")
<link rel="stylesheet" href="/css/index-common-style.css">
<link rel="stylesheet" href="/css/search-common-style.css">
@endsection

@section('title')
資料検索
@endsection

@section('content')
<h1>資料検索</h1>

<!--検索結果表示-->
<div class="table-container">
    <div class="index-searchContainer">
        <!--検索フォーム-->
        <form action="{{ route('books.search') }}" method="get"><!--データの送信先の入力-->
            <input type="number" name="book_id" id="book_id" class="orange-input" placeholder="資料ID">
            <button type="submit" class="clickable search-searchBtn"><i class="fas fa-search"></i></button>
        </form>
    </div>
        <table class="table table-striped"><!--テーブルのクラス名確認-->
            <thead>
                <tr class="navy-bg">
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
</div>
@endsection