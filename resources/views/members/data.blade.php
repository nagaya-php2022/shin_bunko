<dl class="memberData-container">
    @if (isset($showEditBtn) && $showEditBtn)
	<div class="show-editContainer">
		<a class="orange-btn clickable btn" href="{{ route('members.edit', $member->id) }}">
			編集する
			<i class="fas fa-edit"></i>
		</a>
	</div>
	@endif

    <div class="book-data">
        <div class="bookData-cell">
            <dt>会員ID</dt>
            <dd>{{ $member->id ?: "-" }}</dd>
        </div>
        <div class="bookData-cell">
            <dt>会員名</dt>
            <dd>{{ $member->name ?: "-" }}</dd>
        </div>
        <div class="bookData-cell">
            <dt>電話番号</dt>
            <dd>{{ $member->tel ?: "-" }}</dd>
        </div>
    </div>

    <div class="book-data">
        <div class="bookData-cell">
            <dt>メールアドレス</dt>
            <dd>{{ $member->email ?: "-" }}</dd>
        </div>
        <div class="bookData-cell">
            <dt>生年月日</dt>
            <dd>{{ $member->birthday ?: "-" }}</dd>
        </div>
        <div class="bookData-cell">
            <dt>登録年月日</dt>
            <dd>{{ $member->created_at->toDateString() ?: "-" }}</dd>
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