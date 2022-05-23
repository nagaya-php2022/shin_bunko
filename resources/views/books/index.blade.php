@extends('layouts.app')

@section('content')
<h1>資料一覧</h1>

<!--検索ボタン-->
<a href="{{ route('books.search') }}">検索</a><!--資料検索画面へ遷移-->

<!--一覧表示-->
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
                    <td>{{ $book->book_detail->name }}</td>
                    <td>{{ $book->book_detail->author }}</td>
                    <td>{{ $book->book_detail->publisher }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

<!--ページ切り替え-->
    {{ $books->links() }}
@endsection
