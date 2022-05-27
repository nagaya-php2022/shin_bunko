@extends('layouts.app')

@section("style")
<link rel="stylesheet" href="/css/index-common-style.css">
@endsection

@section('title')
資料一覧
@endsection

@section('content')
<h1>資料一覧</h1>

<!--一覧表示-->
<div class="table-container">
    <div class="index-searchContainer">
        <!--検索ボタン-->
        <a class="clickable index-searchBtn" href="{{ route('books.search') }}">
            検索
            <i class="fas fa-search"></i>
        </a>
    </div>
    
    <table class="table table-striped"><!--テーブルのクラス名確認-->
        <thead>
            <tr class="navy-bg">
                <th>資料ID</th>
                <th>タイトル</th>
                <th>著者</th>
                <th>出版社</th>
                <th>状態</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book) <!--booksテーブルのデータを引っ張ってくる-->
                <tr>
                    <td>{{ $book->id }}</td>
                    <td><a href="{{ route('books.show', $book->id) }}">{{ $book->book_detail->name }}</a></td>
                    <td>{{ $book->book_detail->author }}</td>
                    <td>{{ $book->book_detail->publisher }}</td>
                    <td>{{ $book->wasted_at==null ? "" : "廃棄済" }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!--ページ切り替え-->
    {{ $books->links() }}
@endsection
