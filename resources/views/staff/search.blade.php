@extends('layouts.app')

@section('content')
<h1>職員検索</h1>
<!--検索フォーム-->
    <form action="" method="get"><!--データの送信先の入力-->
        @csrf
        <input type="number" name="staff_id" id="staff_id" placeholder="職員ID">
        <button type="submit"><i class="fas fa-search"></i></button>
    </form>

<!--検索結果表示-->
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