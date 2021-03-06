<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ブライダルフェア</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ここにサイト説明を入れます">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/ceremonySearch.css">
    <script src="js/openclose.js"></script>
    <script src="js/fixmenu_pagetop.js"></script>
    <script src="js/ceremonySearch.js"></script>
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="bg2">

    <div id="container">

        <header>
            <h1 id="logo"><a href="home"><img src="images/MIA2.png" alt="marriage integration app"></a></h1>
            <h2>Ceremony<span>式場検索</span></h2>
            <!--PC用（901px以上端末）メニュー-->
            <nav id="menubar">
                <ul>
                    <li><a href="home"><span>Home</span><span>ホーム</span></a></li>
                    <li><a href="column"><span>column</span><span>コラム特集</span></a></li>
                    <li><a href="bridal_fair"><span>ceremony</span><span>式場検索</span></a></li>
                </ul>
                <ul class="icon">
                    <li><a href="#"><img src="images/icon_facebook.png" alt="Facebook"></a></li>
                    <li><a href="#"><img src="images/icon_twitter.png" alt="Twitter"></a></li>
                    <li><a href="#"><img src="images/icon_instagram.png" alt="Instagram"></a></li>
                    <li><a href="#"><img src="images/icon_youtube.png" alt="YouTube"></a></li>
                    <li><a href="#"><img src="images/icon_line.png" alt="LINE"></a></li>
                </ul>
            </nav>
        </header>

        <!--小さな端末用（900px以下端末）ブロック-->
        <nav id="menubar-s">
            <ul>
                <li><a href="home"><span>Home</span><span>ホーム</span></a></li>
                <li><a href="column"><span>column</span><span>コラム特集</span></a></li>
                <li><a href="bridal_fair"><span>ceremony</span><span>式場検索</span></a></li>
            </ul>
            <ul class="icon">
                <li><a href="#"><img src="images/icon_facebook.png" alt="Facebook"></a></li>
                <li><a href="#"><img src="images/icon_twitter.png" alt="Twitter"></a></li>
                <li><a href="#"><img src="images/icon_instagram.png" alt="Instagram"></a></li>
                <li><a href="#"><img src="images/icon_youtube.png" alt="YouTube"></a></li>
                <li><a href="#"><img src="images/icon_line.png" alt="LINE"></a></li>
            </ul>
        </nav>

        <div id="main">

            <section>

                <h2>式場検索</h2>

                <h3>式場の名前を入力し、検索ボタンを押してください</h3>
                <input type="text" id="searchword" placeholder="式場名・エリアを入力する" class="nice-textbox">
                <p href="" class="btn btn--blue btn--emboss btn--cubic" id="search" onclick="Search()">PUSH！</p>
                
                <button id="modalOpen" >エリアで検索</button>

                <h2 id="searchconditions"></h2>
                <table id="ceremonylist">
                </table>
                <div id="easyModal" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h1>エリアを選択</h1>
                    <span class="modalClose">×</span>
                </div>
                <div class="modal-body">
                    <div id="pf">
                        <label><input type="radio" name="prefectures" value="0" onchange="pfCheck(this)" class="pf">岡山</label>
                        <label><input type="radio" name="prefectures" value="1" onchange="pfCheck(this)" class="pf">広島</label>
                        <label><input type="radio" name="prefectures" value="2" onchange="pfCheck(this)" class="pf">山口</label>
                        <label><input type="radio" name="prefectures" value="3" onchange="pfCheck(this)" class="pf">鳥取</label>
                        <label><input type="radio" name="prefectures" value="4" onchange="pfCheck(this)" class="pf">島根</label>
                    </div>
                    <div id="area">

                    </div>
                    <button id="as" onclick="selectSearch()">検索</button>
                </div>
            </div>
        </div>
    </section>

        </div>
        <!--/#main-->

        <footer>
            <small>Copyright&copy; <a href="index.html">Macaroon Shop</a> All Rights Reserved.</small>
            <span class="pr"><a href="https://template-party.com/" target="_blank">《Web
                    Design:Template-Party》</a></span>
        </footer>

    </div>
    <!--/#container-->

    <!--ページの上部に戻るボタン-->
    <p class="nav-fix-pos-pagetop"><a href="#"><img src="images/icon_pagetop.png" alt="↑"></a></p>

    <!--メニュー開閉ボタン-->
    <div id="menubar_hdr" class="close"></div>

    <!--メニューの開閉処理-->
    <script>
        open_close("menubar_hdr", "menubar-s");
    </script>

    <div id= "syosai" hidden>
        <img id="simg">
        <p id="sname"></p>
        <p id="sexplanation"></p>
        <p id="stelephonenumber"></P>
        <p id="saddress"></p>
        <p id="slink"></P>
    </div>
</body>

</html>