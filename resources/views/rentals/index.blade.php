@extends('layouts.app')

@section("style")
<link rel="stylesheet" href="/css/index-common-style.css">
@endsection

@section('title')
貸出一覧
@endsection

@section('content')
<h1>貸出一覧</h1>


<!--一覧表示-->
<div class="table-container">
    <div class="index-searchContainer">
        <!--検索ボタン-->
        <a class="clickable index-searchBtn" href="{{ route('rentals.search') }}">
            検索
            <i class="fas fa-search"></i>
        </a><!--資料検索画面へ遷移-->
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
                    {{--<td>{{ $rental->book->isbn }}</td>--}}
                    <td><a href="{{ route('rentals.show', $rental->id) }}">{{ $rental->book->book_detail->name }}</a></td>

                    <td>{{ $rental->member_id }}</td>
                    <td>{{ $rental->created_at->toDateString() }}</td>
                    <td>{{ $rental->returned_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!--ページ切り替え-->
    {{ $rentals->links() }}
@endsection