@extends('layouts.app')

@section("style")
<link rel="stylesheet" href="/css/index-common-style.css">
@endsection

@section('content')
<h1>会員一覧</h1>

<!--会員状態の選択をするドロップダウンリスト
    <form action="" method="get">フォームの送り先を記入する
        @csrf
        <label for="membership_status">表示</label>
        <select name="membership_status" id="membership_status">
            <option value="1">現会員</option>
            <option value="2">すべての会員</option>
            <option value="3">元会員</option>
        </select>
    </form>-->


<!--一覧表示-->
<div class="table-container">
    <div class="index-searchContainer">
        <!--検索ボタン-->
        <a class="clickable index-searchBtn" href="{{ route('members.search') }}">
            検索
            <i class="fas fa-search"></i>
        </a><!--会員検索画面へ遷移-->
    </div>

    <table class="table table-striped"><!--テーブルのクラス名確認-->
        <thead>
            <tr class="navy-bg">
                <th>会員ID</th>
                <th>氏名</th>
                <th>電話番号</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member) <!--membersテーブルのデータを引っ張ってくる-->
                <tr>
                    <td>{{ $member->id }}</td>
                    <td><a href="{{ route('members.show', $member->id) }}">{{ $member->name }}</a></td>
                    <td>{{ $member->tel }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!--ページ切り替え-->
{{ $members->links() }}

@endsection