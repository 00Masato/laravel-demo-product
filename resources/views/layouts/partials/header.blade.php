<nav class="navbar navbar-expand-sm navbar-dark navbar-toggleable-md navbar-invers bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav4" aria-controls="navbarNav4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">ホーム</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ action('UserRegisterController@getRegister') }}">新規登録</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{action('LogoutController@getLogout')}}">ログアウト</a>
            </li>
        </ul>
    </div>
</nav>