<dl class="memberData-container">
    @if (isset($showEditBtn) && $showEditBtn)
	<div class="show-editContainer">
		<a class="orange-btn clickable btn" href="{{ route('members.edit', $member->id) }}">
			編集する
			<i class="fas fa-edit"></i>
		</a>
	</div>
	@endif

    <dt>会員ID</dt>
    <dd>{{ $member->id ?: "-" }}</dd>
    <dt>電話番号</dt>
    <dd>{{ $member->tel ?: "-" }}</dd>
    <dt>メールアドレス</dt>
    <dd>{{ $member->email ?: "-" }}</dd>
    <dt>生年月日</dt>
    <dd>{{ $member->birthday ?: "-" }}</dd>
    <dt>登録年月日</dt>
    <dd>{{ $member->created_at ?: "-" }}</dd>
</dl>