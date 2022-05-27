@extends('layouts.app')

@section("style")
<link rel="stylesheet" href="/css/index-common-style.css">
<link rel="stylesheet" href="/css/search-common-style.css">
@endsection

@section('title')
会員検索
@endsection

@section('content')
<h1>会員検索</h1>

<!--検索結果表示-->
<div class="table-container">
    <div class="index-searchContainer">
        <!--検索フォーム-->
        <form action="{{ route('members.search') }}" method="get"><!--データの送信先の入力-->
            <input type="number" name="member_id" id="member_id" class="orange-input" placeholder="会員ID">
            <button type="submit" class="clickable search-searchBtn"><i class="fas fa-search"></i></button>
        </form>
    </div>

    <table class="table table-striped"><!--テーブルのクラス名確認-->
        <thead>
            <tr class="navy-bg">
                <th>会員ID</th>
                <th>氏名</th>
                <th>電話番号</th>
                <th>登録年月日</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member) <!--membersテーブルのデータを引っ張ってくる-->
                <tr>
                    <td>{{ $member->id }}</td>
                    <td><a href="{{ route('members.show', $member->id) }}">{{ $member->name }}</a></td>
                    <td>{{ $member->tel }}</td>
                    <td>{{ $member->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection