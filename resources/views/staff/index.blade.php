@extends('layouts.app')

@section("style")
<link rel="stylesheet" href="/css/index-common-style.css">
@endsection

@section('content')
<h1>職員一覧</h1>


<!--一覧表示-->
<div class="table-container">
    <div class="index-searchContainer">
        <!--検索ボタン-->
        <a class="clickable index-searchBtn" href="{{ route('staff.search') }}">
            検索
            <i class="fas fa-search"></i>
        </a><!--職員検索画面へ遷移-->
    </div>

    <table class="table table-striped"><!--テーブルのクラス名確認-->
        <thead>
            <tr class="navy-bg">
                <th>職員ID</th>
                <th>氏名</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($staff as $member) <!--staffテーブルのデータを引っ張ってくる-->
                <tr>
                    <td>{{ $member->id }}</td>
                    <td>{{ $member->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!--ページ切り替え-->
    {{ $staff->links() }}
@endsection
