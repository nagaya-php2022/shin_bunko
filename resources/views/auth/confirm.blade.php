@extends('layouts.app')

@section('content')
<h1>職員登録</h1>

@if ({{ $request->password }} === {{ $request->password_confirmation }})
    <p>氏名 {{ $request->name }}</p>
    <p>パスワード 
        @for($i = 0; $i < strlen($request->password); $i++)
            *
        @endfor
    </p>
    <form action="{{ route('register') }}" method="post">
        @csrf
        <input type="hidden" name="name" value={{ $request->name }}>
        <input type="hidden" name="name" value={{ $request->password }}>
        <a href="{{ route('register') }}">戻る</a>
        <input type="submit" value="保存">
    </form>
@else
    <p>パスワードが一致しません</p>
@endif
@endsection