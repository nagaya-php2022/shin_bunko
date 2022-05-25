@extends('layouts.app')

@section("style")
<link rel="stylesheet" href="/css/index-common-style.css">
<link rel="stylesheet" href="/css/search-common-style.css">
@endsection

@section('content')
<h1>貸出検索</h1>

<!--検索結果表示-->
<div class="table-container">
    <div class="index-searchContainer">
        <!--検索フォーム-->
        <form action="{{ route('rentals.search') }}" method="get"><!--データの送信先の入力-->
            <input type="number" name="book_id" id="book_id" class="orange-input" placeholder="資料ID">
            <button type="submit" class="clickable search-searchBtn"><i class="fas fa-search"></i></button>
        </form>
    </div>

    <table class="table table-striped"><!--テーブルのクラス名確認-->
        <thead>
            <tr class="navy-bg">
                <th>資料ID</th>
                <th>タイトル</th>
                <th>利用会員ID</th>
                <th>貸出日</th>
                <th>返却日</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rentals as $rental) <!--rentalsテーブルのデータを引っ張ってくる-->
                <tr>
                    <td>{{ $rental->book_id }}</td>

                    <!--book_idの参照先のbooksテーブルへ→isbnの参照先のbook_detailsテーブルへ-->
                    <td><a href="{{ route('rentals.show', $rental->id) }}">{{ $rental->book->book_detail->name }}</a></td>

                    <td>{{ $rental->member_id }}</td>
                    <td>{{ $rental->created_at->toDateString() }}</td>
                    <td>{{ $rental->returned_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection