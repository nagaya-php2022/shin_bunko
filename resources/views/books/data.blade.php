<dl>
        <dt>資料ID</dt>
        <dd>{{ $book->id }}</dd>
        <dt>ISBN番号</dt>
        <dd>{{ $book->isbn }}</dd>
        <dt>分類コード</dt>
        <dd>{{ $book->group_code }}</dd>
        <dt>著者</dt>
        <dd>{{ $book->author }}</dd>
        <dt>出版社</dt>
        <dd>{{ $book->publisher }}</dd>
        <dt>出版日</dt>
        <dd>{{ $book->published_at }}</dd>
        <dt>入荷年月日</dt>
        <dd>{{ $book->stocked_at }}</dd>
        <dt>廃棄年月日</dt>
        <dd>{{ $book->wasted_at }}</dd>
        <dt>廃棄備考</dt>
        <dd>{{ $book->memo }}</dd>   
</dl>