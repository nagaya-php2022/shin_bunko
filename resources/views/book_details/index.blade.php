@extends('layouts.app')

@section("style")
<link rel="stylesheet" href="/css/index-common-style.css">
@endsection

@section('content')
<h1>ISBN一覧</h1>

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
                <th>ISBN番号</th>
                <th>資料名</th>
                <th>分類コード</th>
                <th>分類名</th>
                <th>著者</th>
                <th>出版社</th>
                <th>出版日</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($book_details as $book_detail) <!--booksテーブルのデータを引っ張ってくる-->
                <tr>
                    <td>{{ $book_detail->isbn }}</td>
                    <td><a href="{{ route('book_details.show', $book_detail->isbn) }}">{{ $book_detail->name }}</a></td>
                    <td>{{ $book_detail->group_code }}</td>
                    <td>{{ $book_detail->group->code }}</td>
                    <td>{{ $book_detail->author }}</td>
                    <td>{{ $book_detail->publisher }}</td>
                    <td>{{ $book_detail->published_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!--ページ切り替え-->
    {{ $book_details->links() }}
@endsection
