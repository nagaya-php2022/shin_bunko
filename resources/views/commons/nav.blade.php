<header>
    <div class="header-container">
        <div class="header-icon">
            <img src="/img/header-icon.png">
        </div>
        {{-- ログアウト --}}
        @if (\Auth::check())
        <form id="logout-form" action="{{ route('logout') }}" method="post">
            @csrf
            <div class="header-logoutForm">
                <span class="header-staffName">
                    <span>
                        {{ \Auth::user()->name }}さん
                    </span>
                    <span>
                        (ID:{{ \Auth::id() }})
                    </span>
                </span>
                <button type="submit">
                    ログアウト
                    <img style="height:1em" src="/img/arrow-right-from-bracket-solid.svg" alt="">
            </div>
        </form>
        @endif
        {{-- メニュー --}}
        <ul class="header-navigation">
            <li>
                <a href="/">ホーム</a>
            </li>
            <li>
                <a href="{{ route('members.index') }}">会員一覧</a>
            </li>
            <li>
                <a href="{{ route('books.index') }}">資料一覧</a>
            </li>
            <li>
                <a href="{{ route('book_details.index') }}">ISBN一覧</a>
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