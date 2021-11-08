<!DOCTYPE html>

<head>
    <link href="{{ asset('./css/style.css')}}" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body>
    <header class="header">
        <nav class="nav_list">
            <div class="navi_inner">
                <ul class="header_logo">
                    <li>
                        <a href="home">
                            <!-- <img src="image/top.png"style="width :200;">がぞう -->
                            <div class="ja">アプリ名</div>
                        </a>
                    </li>
                </ul>
                <ul class="navi_content">
                    <li class="navi_schedule">
                        <a href="schedule">
                            <div class="ja">スケジュール管理</div>
                        </a>
                    </li>
                    <li class="navi_budget">
                        <a href="budget">
                            <div class="ja">予算管理</div>
                        </a>
                    </li>
                    <li class="navi_column">
                        <a href="column">
                            <div class="ja">コラム特集</div>
                        </a>
                    </li>
                    <li class="navi_bridal_fair">
                        <a href="bridal_fair">
                            <div class="ja">ブライダルフェア</div>
                        </a>
                    </li>
                    <li class="navi_other" id="online_consultation">
                        <a>
                            <div class="ja">オンライン相談</div>
                        </a>
                        <ul>
                            <nav id="obiti">
                            <li><a href="online_reserve">
                                    <div>オンライン相談予約</div>
                                </a>
                            </li>
                            <li><a href="videochat">
                                    <div>ビデオチャット</div>
                                </a>
                            </li>
                            <li>
                                <a href="chat">
                                    <div>チャット</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="navi_contact">
                    <li class="navi_inquiry">
                        <a href="inquiry">
                            <div class="ja">お問い合わせ</div>
                        </a>
                    </li>
                </ul>
                <ul class="navi_login">
                    <li class="navi_account">
                        <a href="login">
                            <div class="ja">会員登録・ログイン</div>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header><br>
    @yield('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/bridal.js"></script>
</body>

</html>