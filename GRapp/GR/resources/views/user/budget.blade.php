<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>予算管理</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/openclose.js"></script>
    <script src="js/fixmenu_pagetop.js"></script>
    <script src="js/budget.js"></script>
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="bg2">

    <div id="container">

        <header>
            <h1 id="logo"><a href="index.html"><img src="images/logo2.png" alt="Macaroon Shop"></a></h1>
            <h2>BUDGET<span>予算管理</span></h2>
            <!--PC用（901px以上端末）メニュー-->
            <nav id="menubar">
                <ul>
                    <li><a href="home"><span>Home</span><span>ホーム</span></a></li>
                    <li><a href="schedule"><span>schedule</span><span>スケジュール</span></a></li>
                    <li><a href="budget"><span>budget</span><span>予算管理</span></a></li>
                    <li><a href="column"><span>column</span><span>コラム特集</span></a></li>
                    <li><a href="bridal_fair"><span>bridalfair</span><span>ブライダルフェア</span></a></li>
                    <li><a href="chat"><span>chat</span><span>チャット</span></a></li>
                    <li><a href="online_reserve"><span>consultation</span><span>オンライン相談予約</span></a></li>
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
                <li><a href="schedule"><span>schedule</span><span>スケジュール</span></a></li>
                <li><a href="budget"><span>budget</span><span>予算管理</span></a></li>
                <li><a href="column"><span>column</span><span>コラム特集</span></a></li>
                <li><a href="bridal_fair"><span>bridalfair</span><span>ブライダルフェア</span></a></li>
                <li><a href="chat"><span>chat</span><span>チャット</span></a></li>
                <li><a href="online_reserve"><span>consultation</span><span>オンライン相談予約</span></a></li>
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
                <div class="table">全体の費用の予算を入力してください</div>
                <input type="text" style="height: 40px" id="cost">円<br><br>
                <table border="1" id="table">
                <tr>
                    <th class="item">項目</th>
                    <th class="kazu">数量</th>
                    <th>料金</th>
                    <th>金額</th>
                    <th>MEMO</th>
                </tr>
                <tr>
                    <td>挙式料</td>
                    <td class="td" ><input type="text" class="quan" value=""></td>
                    <td class="td"><input type="text" class="much" value=""></td>
                    <td class="price" value=""></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>
                <tr>
                    <td>会場料</td>
                    <td class="td"><input type="text" class="quan" value=""></td>
                    <td class="td"><input type="text" class="much" value=""></td>
                    <td class="price" value=""></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>
                <tr>
                    <td>介添料</td>
                    <td class="td"><input type="text" class="quan" value=""></td>
                    <td class="td"><input type="text" class="much" value=""></td>
                    <td class="price" value=""></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>
                <tr>
                    <td>控え室料</td>
                    <td class="td"><input type="text" class="quan" value=""></td>
                    <td class="td"><input type="text" class="much" value=""></td>
                    <td class="price" value=""></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>
                <tr>
                    <td>司会料</td>
                    <td class="td"><input type="text" class="quan" value=""></td>
                    <td class="td"><input type="text" class="much" value=""></td>
                    <td class="price" value=""></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>
                <tr>
                    <td>ブーケ・ブートニア</td>
                    <td class="td"><input type="text" class="quan" value=""></td>
                    <td class="td"><input type="text" class="much" value=""></td>
                    <td class="price" value=""></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>
                <tr>
                    <td>音楽</td>
                    <td class="td"><input type="text" class="quan" value=""></td>
                    <td class="td"><input type="text" class="much" value=""></td>
                    <td class="price" name="price" value=""></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>
                <tr>
                    <td>ビデオ</td>
                    <td class="td"><input type="text" class="quan" value=""></td>
                    <td class="td"><input type="text" class="much" value=""></td>
                    <td class="price" name="price" value=""></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>
                <tr>
                    <td>引き出物</td>
                    <td class="td"><input type="text" class="quan" value=""></td>
                    <td class="td"><input type="text" class="much" value=""></td>
                    <td class="price" name="price" value=""></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>
            </table>
            <table border="1">
                <tr>
                    <th colspan="2" class="item"></th>
                    <th class="kazu"></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>     
                    <td rowspan="2" class="row">料理</td>
                    <td>大人</td>
                    <td class="td"><input type="text" class="quan" value=""></td>
                    <td class="td"><input type="text" class="much" value=""></td>
                    <td class="price" name="price" value=""></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>       
                <tr>    
                    <td>子供</td>
                    <td class="td"><input type="text" class="quan" value=""></td>
                    <td class="td"><input type="text" class="much" value=""></td>
                    <td class="price" name="price" value=""></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>
            </table>
            <table border="1">
                <tr>
                    <th colspan="2" class="item"></th>
                    <th class="kazu"></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>        
                    <td rowspan="2" class="row">演出</td>
                    <td>ケーキ入刀</td>
                    <td class="td"><input type="text" class="quan" value=""></td>
                    <td class="td"><input type="text" class="much" value=""></td>
                    <td class="price" name="price" value=""></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>       
                <tr>    
                    <td>キャンドルサービス</td>
                    <td class="td"><input type="text" class="quan" value=""></td>
                    <td class="td"><input type="text" class="much" value=""></td>
                    <td class="price" name="price" value=""></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>
            </table>
            <table border="1">
                <tr>
                    <th colspan="2" class="item"></th>
                    <th class="kazu"></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>        
                    <td rowspan="4" class="row">装花</td>
                    <td>ウェディングケーキ</td>
                    <td class="td"><input type="text" class="quan" value=""></td>
                    <td class="td"><input type="text" class="much" value=""></td>
                    <td class="price" name="price" value=""></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>       
                <tr>    
                    <td>メインテーブル</td>
                    <td class="td"><input type="text" class="quan" value=""></td>
                    <td class="td"><input type="text" class="much" value=""></td>
                    <td class="price" name="price" value=""></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>
                <tr>    
                    <td>卓上</td>
                    <td class="td"><input type="text" class="quan" value=""></td>
                    <td class="td"><input type="text" class="much" value=""></td>
                    <td class="price" name="price" value=""></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>
                <tr>    
                    <td>ブライダルキャンドル</td>
                    <td class="td"><input type="text" class="quan" value=""></td>
                    <td class="td"><input type="text" class="much" value=""></td>
                    <td class="price" name="price" value=""></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>
            </table>
            <table border="1">
                <tr>
                    <th colspan="2" class="item"></th>
                    <th class="kazu"></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>        
                    <td rowspan="2" class="row">花束</td>
                    <td>両親への贈呈用</td>
                    <td class="td"><input type="text" class="quan" value=""></td>
                    <td class="td"><input type="text" class="much" value=""></td>
                    <td class="price" name="price" value=""></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>       
                <tr>    
                    <td>新郎新婦への贈呈用</td>
                    <td class="td"><input type="text" class="quan" value=""></td>
                    <td class="td"><input type="text" class="much" value=""></td>
                    <td class="price" name="price" value=""></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>
            </table>
            <table border="1">
                <tr>
                    <th colspan="2" class="item"></th>
                    <th class="kazu"></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>        
                    <td rowspan="2" class="row">写真</td>
                    <td>スタジオ</td>
                    <td class="td"><input type="text" class="quan" value=""></td>
                    <td class="td"><input type="text" class="much" value=""></td>
                    <td class="price" name="price" value=""></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>       
                <tr>    
                    <td>スナップ</td>
                    <td class="td"><input type="text" class="quan" value=""></td>
                    <td class="td"><input type="text" class="much" value=""></td>
                    <td class="price" name="price" value=""></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>
            </table>
            <table border="1">
                    <tr>
                        <th colspan="2" class="item"></th>
                        <th class="kazu"></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>        
                        <td rowspan="6" class="row">心付け</td>
                        <td>会場係</td>
                        <td class="td"><input type="text" class="quan" value=""></td>
                        <td class="td"><input type="text" class="much" value=""></td>
                        <td class="price" name="price" value=""></td>
                        <td class="td"><input type="text" class="memo"></td>
                    </tr>       
                    <tr>    
                        <td>美容師</td>
                        <td class="td"><input type="text" class="quan" value=""></td>
                        <td class="td"><input type="text" class="much" value=""></td>
                        <td class="price" name="price" value=""></td>
                        <td class="td"><input type="text" class="memo"></td>
                    </tr>
                    <tr>    
                        <td>着付係</td>
                        <td class="td"><input type="text" class="quan" value=""></td>
                        <td class="td"><input type="text" class="much" value=""></td>
                        <td class="price" name="price" value=""></td>
                        <td class="td"><input type="text" class="memo"></td>
                    </tr>
                    <tr>    
                        <td>写真家</td>
                        <td class="td"><input type="text" class="quan" value=""></td>
                        <td class="td"><input type="text" class="much" value=""></td>
                        <td class="price" name="price" value=""></td>
                        <td class="td"><input type="text" class="memo"></td>
                    </tr>
                    <tr>    
                        <td>受付係</td>
                        <td class="td"><input type="text" class="quan" value=""></td>
                        <td class="td"><input type="text" class="much" value=""></td>
                        <td class="price" name="price" value=""></td>
                        <td class="td"><input type="text" class="memo"></td>
                    </tr>
                    <tr>    
                        <td>契約人</td>
                        <td class="td"><input type="text" class="quan" value=""></td>
                        <td class="td"><input type="text" class="much" value=""></td>
                        <td class="price" name="price" value=""></td>
                        <td class="td"><input type="text"class="memo"></td>
                    </tr>
                </table>
                <table border="1">
                    <tr>
                        <th colspan="2" class="item"></th>
                        <th class="kazu"></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>        
                        <td rowspan="3" class="row">その他</td>
                        <td class="td"><input type="text" class="other"></td>
                        <td class="td"><input type="text" class="quan" value=""></td>
                        <td class="td"><input type="text" class="much" value=""></td>
                        <td class="price" name="price" value=""></td>
                        <td class="td"><input type="text" class="memo"></td>
                    </tr>       
                    <tr>    
                        <td class="td"><input type="text" class="other"></td>
                        <td class="td"><input type="text" class="quan" value=""></td>
                        <td class="td"><input type="text" class="much" value=""></td>
                        <td class="price" name="price" value=""></td>
                        <td class="td"><input type="text" class="memo"></td>
                    </tr>
                    <tr>    
                        <td class="td"><input type="text" class="other"></td>
                        <td class="td"><input type="text" class="quan" value=""></td>
                        <td class="td"><input type="text" class="much" value=""></td>
                        <td class="price" name="price" value=""></td>
                        <td class="td"><input type="text"class="memo"></td>
                    </tr>
                </table>
                <table border="1">
                    <tr>
                        <th width="215px" bgcolor="black"></th>
                        <th bgcolor="black"></th>
                        <th bgcolor="black"></th>
                    </tr>
                    <tr>
                        <td align="right">合計</td>
                        <td id="sum" class="end" align="right"></td>
                        <td class="td"><input type="text" class="memo"></td>
                    </tr>
                    <tr>
                        <td align="right">予算との差分</td>
                        <td id="diff" class="end "align="right"></td>
                        <td class="td"><input type="text" class="memo"></td>
                    </tr>
                </table>
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

</body>

</html>