
<dl class="bookData-container">
	@if (isset($showEditBtn) && $showEditBtn)
	<div class="show-editContainer">
		<a class="orange-btn clickable btn" href="{{ route('books.edit', $book->id) }}">
			編集する
			<i class="fas fa-edit"></i>
		</a>
	</div>
	@endif
	
	
	<div class="book-data">
		<div class="bookData-cell">
			<dt>資料名</dt>
			<dd>{{ $book->book_detail->name }}</dd>
		</div>
		<div class="bookData-cell">
			<dt>資料ID</dt>
			<dd>{{ $book->id }}</dd>
		</div>
		<div class="bookData-cell">
			<dt>ISBN番号</dt>
			<dd>{{ $book->isbn }}</dd>
		</div>
	</div>
	
	<div class="book-data">
		<div class="bookData-cell">
			<dt>分類コード</dt>
			<dd>{{ $book->book_detail->group_code }}</dd>
		</div>
		<div class="bookData-cell">
			<dt>著者</dt>
			<dd>{{ $book->book_detail->author }}</dd>
		</div>
		<div class="bookData-cell">
			<dt>出版社</dt>
			<dd>{{ $book->book_detail->publisher }}</dd>
		</div>
	</div>
	
	<div class="book-data">
		<div class="bookData-cell">
			<dt>出版日</dt>
			<dd>{{ $book->book_detail->published_at }}</dd>
		</div>
		<div class="bookData-cell">
			<dt>入荷年月日</dt>
			<dd>{{ $book->stocked_at }}</dd>
		</div>
		<div class="bookData-cell">
			<dt>備考</dt>
			<dd>{{ $book->memo ?: "-" }}</dd>   
		</div>
	</div>
	
	<div class="book-data">
		<div class="bookData-cell">
			<dt>廃棄年月日</dt>
			<dd>{{ $book->wasted_at ?: "-" }}</dd>
		</div>
	</div>
	
	<style>
		.book-data {
			margin-bottom: 2em;
			padding-bottom: 2em;
			border-bottom: 1px solid;
		}
		.book-data:last-of-type {
			border-bottom: none;
		}
		
		.bookData-cell {
			display: inline-block;
			width: 30%;
		}
	</style>
</dl>