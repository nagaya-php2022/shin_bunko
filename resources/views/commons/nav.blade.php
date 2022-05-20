<header>
    <div class="container">
        {{-- ログアウト --}}
        <form id="logout-form" action="{{ route('logout') }}" method="post">
            @csrf
            <input type="submit" value="ログアウト">
        </form>
        {{-- メニュー --}}
        <ul class="navigation">
            <li>
                <a href="{{ route('members.index') }}">会員一覧</a>
            </li>
            <li>
                <a href="{{ route('books.index') }}">資料一覧</a>
            </li>
            <li>
                <a href="{{ route('rentals.index') }}">貸出一覧</a>
            </li>
            <li>
                <a href="{{ route('staff.index') }}">職員一覧</a>
            </li>
        </ul>
    </div>
</header>