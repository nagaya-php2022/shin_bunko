@extends('layouts.app')

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

<!--検索ボタン-->
<a href="">検索</a><!--会員検索画面へ遷移-->

<!--一覧表示-->
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