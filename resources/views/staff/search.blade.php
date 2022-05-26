@extends('layouts.app')

@section("style")
<link rel="stylesheet" href="/css/index-common-style.css">
<link rel="stylesheet" href="/css/search-common-style.css">
@endsection

@section('title')
職員検索
@endsection

@section('content')
<h1>職員検索</h1>

<div class="table-container">
    <div class="index-searchContainer">
        <!--検索フォーム-->
        <form action="{{ route('staff.search') }}" method="get"><!--データの送信先の入力-->
            <input type="number" name="staff_id" id="staff_id" class="orange-input" placeholder="職員ID">
            <button type="submit" class="clickable search-searchBtn"><i class="fas fa-search"></i></button>
        </form>
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
@endsection