<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        {{-- トップページへのリンク --}}
        <a class="navbar-brand" href="/">家計サイズの保険サイズ</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                {{-- リンク --}}
                <li class="nav-item"><a href="#" class="nav-link">link-A</a></li>
                {{-- リンク --}}
                <li class="nav-item"><a href="#" class="nav-link">link-B</a></li>
                {{-- ユーザ登録ページへのリンク --}}
                <li>{!! link_to_route('signup.get', 'Signup', [], ['class' => 'nav-link']) !!}</li>
            </ul>
        </div>
    </nav>
</header>
