@extends('layouts.app')

@section('content')
<h1>職員一覧</h1>

<!--検索ボタン-->
<a href="">検索</a><!--職員検索画面へ遷移-->

<!--一覧表示-->
    <table class="table"><!--テーブルのクラス名確認-->
        <thead>
            <tr>
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

<!--ページ切り替え-->
    {{ $staff->links() }}
@endsection
