<dl class="memberData-container">
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