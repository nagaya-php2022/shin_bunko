<dl class="bookData-container">
	<dt>ISBN番号</dt>
	<dd>{{ $book_detail->isbn }}</dd>
    <dt>資料名</dt>
	<dd>{{ $book_detail->name }}</dd>
	<dt>分類コード</dt>
	<dd>{{ $book_detail->group_code }}</dd>
	<dt>著者</dt>
	<dd>{{ $book_detail->author }}</dd>
	<dt>出版社</dt>
	<dd>{{ $book_detail->publisher }}</dd>
	<dt>出版日</dt>
	<dd>{{ $book_detail->published_at }}</dd>  
</dl>