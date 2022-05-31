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
	<div class="bookdetail-data">
		<div class="bookdetailData-cell">
			<dt>ISBN番号</dt>
			<dd>{{ $book_detail->isbn }}</dd>
		</div>
		<div class="bookdetailData-cell">
			<dt>資料名</dt>
			<dd>{{ $book_detail->name }}</dd>
		</div>
		<div class="bookdetailData-cell">
			<dt>分類コード</dt>
			<dd>{{ $book_detail->group_code }}</dd>
		</div>
	</div>
	
	<div class="bookdetail-data">
		<div class="bookdetailData-cell">
			<dt>分類名</dt>
			<dd>{{ $book_detail->group->name }}</dd>
		</div>
		<div class="bookdetailData-cell">
			<dt>著者</dt>
			<dd>{{ $book_detail->author }}</dd>
		</div>
		<div class="bookdetailData-cell">
			<dt>出版社</dt>
			<dd>{{ $book_detail->publisher }}</dd>
		</div>
	</div>
	
	<div class="bookdetail-data">
		<div class="bookdetailData-cell">
			<dt>出版日</dt>
			<dd>{{ $book_detail->published_at }}</dd> 
		</div>
		<div class="bookdetailData-cell">
			<dt>新刊</dt>
			<dd>{{ $book_detail->is_new_book ? "新刊" : "-"}}</dd>
		</div>
	</div>
	
	<style>
		.bookdetail-data {
			margin-bottom: 2em;
			padding-bottom: 2em;
			border-bottom: 1px solid;
		}
		.bookdetail-data:last-of-type {
			border-bottom: none;
		}
		
		.bookdetailData-cell {
			display: inline-block;
			width: 30%;
		}
	</style>
</dl>