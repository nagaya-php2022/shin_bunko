@extends('layouts.app')

@section('content')
<h1>会員検索</h1>
<!--検索フォーム-->
    <form action="" method="get"><!--データの送信先の入力-->
        @csrf
        <input type="number" name="member_id" id="member_id" placeholder="会員ID">
        <button type="submit"><i class="fas fa-search"></i></button>
    </form>

<!--検索結果表示-->
<table class="table"><!--テーブルのクラス名確認-->
    <thead>
        <tr>
            <th>会員ID</th>
            <th>氏名</th>
            <th>電話番号</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($members as $member) <!--membersテーブルのデータを引っ張ってくる-->
            <tr>
                <td>{{ $member->id }}</td>
                <td>{{ $member->name }}</td>
                <td>{{ $member->tel }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<!--ページ切り替え-->
{{ $members->links() }}
@endsection