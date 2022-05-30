<dl class="bookData-container">
@if (isset($showEditBtn) && $showEditBtn)
<div class="show-editContainer">
	<a class="orange-btn clickable btn" href="{{ route('book_details.edit', $book_detail->isbn) }}">
		編集する
		<i class="fas fa-edit"></i>
	</a>
</div>
@endif

<dl class="bookData-container">
	<dt>ISBN番号</dt>
	<dd>{{ $book_detail->isbn }}</dd>
    <dt>資料名</dt>
	<dd>{{ $book_detail->name }}</dd>
	<dt>分類コード</dt>
	<dd>{{ $book_detail->group_code }}</dd>
	<dt>分類名</dt>
	<dd>{{ $book_detail->group->name }}</dd>
	<dt>著者</dt>
	<dd>{{ $book_detail->author }}</dd>
	<dt>出版社</dt>
	<dd>{{ $book_detail->publisher }}</dd>
	<dt>出版日</dt>
	<dd>{{ $book_detail->published_at }}</dd> 
	<dt>新刊</dt>
	<dd>{{ $book_detail->is_new_book ? "新刊" : ""}}</dd> 
</dl>