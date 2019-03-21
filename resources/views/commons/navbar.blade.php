<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="/">MessageBoard</a>

        <button type="button" class="navbar-toggler" data-toggler="collapse" data-target="#nav-bar">
            <span class="navbar-togger-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                <li class="nav-item">{!! link_to_route('messages.create', '新規メッセージの投稿', [], ['class' => 'nav-link']) !!}</li>
            </ul>
            <!--二つかくことでliの内容がナビゲーションバーの右側に表示される-->
        </div>
    </nav>
</header>