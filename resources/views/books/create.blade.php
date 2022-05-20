@extends('layouts.app')

@section('content')

<h1>資料登録</h1>
<form method="POST" action="">
    <label>資料名</br>
    <input type="text" name="name" value=""></label></br>
    <label>ISBN番号</br>
    <input type="number" name="isbn" value=""></label></br>
    <label>入荷年月日</br>
    <input type="date" name="stocked_at" value=""></label></br>
    <label>備考</br>
    <textarea name="memo" value=""></textarea></label></br>

    <input type="submit" value="保存">
</form>
@endsection
