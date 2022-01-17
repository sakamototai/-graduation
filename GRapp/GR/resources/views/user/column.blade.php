<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MIA コラム特集</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ここにサイト説明を入れます">
    <meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/openclose.js"></script>
    <script src="js/fixmenu_pagetop.js"></script>
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

    <div id="container">

        <header>
            <h1 id="logo">
                <a href="home"><img src="images/MIA2.png" alt="marriage integration app"></a>
            </h1>
            <h2>COLUMN<span>コラム</span></h2>
            <!--PC用（901px以上端末）メニュー-->
            <nav id="menubar">
                <ul>
                    <li><a href="home"><span>Home</span><span>ホーム</span></a></li>
                    <li><a href="column"><span>column</span><span>コラム特集</span></a></li>
                    <li><a href="bridal_fair"><span>ceremony</span><span>式場検索</span></a></li>
                </ul>
                <ul class="icon">
                    <li>
                        <a href="#"><img src="images/icon_facebook.png" alt="Facebook"></a>
                    </li>
                    <li>
                        <a href="#"><img src="images/icon_twitter.png" alt="Twitter"></a>
                    </li>
                    <li>
                        <a href="#"><img src="images/icon_instagram.png" alt="Instagram"></a>
                    </li>
                    <li>
                        <a href="#"><img src="images/icon_youtube.png" alt="YouTube"></a>
                    </li>
                    <li>
                        <a href="#"><img src="images/icon_line.png" alt="LINE"></a>
                    </li>
                </ul>
            </nav>
        </header>

        <!--小さな端末用（900px以下端末）ブロック-->
        <nav id="menubar-s">
            <ul>
                <li><a href="home"><span>Home</span><span>ホーム</span></a></li>
                <li><a href="column"><span>column</span><span>コラム特集</span></a></li>
            </ul>
            <ul class="icon">
                <li>
                    <a href="#"><img src="images/icon_facebook.png" alt="Facebook"></a>
                </li>
                <li>
                    <a href="#"><img src="images/icon_twitter.png" alt="Twitter"></a>
                </li>
                <li>
                    <a href="#"><img src="images/icon_instagram.png" alt="Instagram"></a>
                </li>
                <li>
                    <a href="#"><img src="images/icon_youtube.png" alt="YouTube"></a>
                </li>
                <li>
                    <a href="#"><img src="images/icon_line.png" alt="LINE"></a>
                </li>
            </ul>
        </nav>

        <div id="main">

            <section class="ofh">

                <h2>カテゴリー別注目記事</h2>
                @for($i = 1;$i <= 10 && $i <= $number;$i++)
                <div class="list">
                    <a href="column/{{$item[$i]->getId()}}">
                        <figure><img src="images/column/{{$item[$i]->getSamnail()}}" alt=""></figure>
                        <h4>{{$item[$i]->getTitle()}}</h4>
                        <p class="popular">人気</p>
                    </a>
                    </br>
                    <div><a href="">{{$item[$i]->getTag(1)}}</a>　<a href="">{{$item[$i]->getTag(2)}}</a>　<a href="">{{$item[$i]->getTag(3)}}</a>　</div>
                    <p>{{$item[$i]->getHeding(1)}}</p>
                </div>
                @endfor

            </section>

        </div>
        <!--/#main-->

        <footer>
            <small>Copyright&copy; <a href="home">MIA column</a> All Rights Reserved.</small>
            <span class="pr"><a href="https://template-party.com/" target="_blank">《Web
                    Design:Template-Party》</a></span>
        </footer>

    </div>
    <!--/#container-->

    <!--ページの上部に戻るボタン-->
    <p class="nav-fix-pos-pagetop">
        <a href="#"><img src="images/icon_pagetop.png" alt="↑"></a>
    </p>

    <!--メニュー開閉ボタン-->
    <div id="menubar_hdr" class="close"></div>

    <!--メニューの開閉処理-->
    <script>
        open_close("menubar_hdr", "menubar-s");
    </script>

</body>

</html>