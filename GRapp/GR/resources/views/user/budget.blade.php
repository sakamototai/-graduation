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
                    <th class="item">　　　　　　項目</th>
                    <th class="kazu">数量</th>
                    <th>　　　　　料金</th>
                    <th>　　　　　金額</th>
                    <th>　　　　　MEMO</th>
                </tr>
                <tr>
                    <th>挙式料</th>
                    <td class="td" ><input type="text" class="quan" id="1-1"></td>
                    <td class="td"><input type="text" class="much" id="1-2"></td>
                    <td class="ppp" id="p1"></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>
                <tr>
                    <th>会場料</th>
                    <td class="td"><input type="text" class="quan" id="2-1"></td>
                    <td class="td"><input type="text" class="much" id="2-2"></td>
                    <td class="ppp" id="p2"></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>
                <tr>
                    <th>介添料</th>
                    <td class="td"><input type="text" class="quan" id="3-1"></td>
                    <td class="td"><input type="text" class="much" id="3-2"></td>
                    <td class="ppp"  id="p3"></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>
                <tr>
                    <th>控え室料</th>
                    <td class="td"><input type="text" class="quan" id="4-1"></td>
                    <td class="td"><input type="text" class="much" id="4-2"></td>
                    <td class="ppp" id="p4"></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>
                <tr>
                    <th>司会料</th>
                    <td class="td"><input type="text" class="quan" id="5-1"></td>
                    <td class="td"><input type="text" class="much" id="5-2"></td>
                    <td class="ppp" id="p5"></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>
                <tr>
                    <th>ブーケ・ブートニア</th>
                    <td class="td"><input type="text" class="quan" id="6-1"></td>
                    <td class="td"><input type="text" class="much" id="6-2"></td>
                    <td class="ppp" id="p6"></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>
                <tr>
                    <th>音楽</th>
                    <td class="td"><input type="text" class="quan" id="7-1"></td>
                    <td class="td"><input type="text" class="much" id="7-2"></td>
                    <td class="ppp" id="p7"></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>
                <tr>
                    <th>ビデオ</th>
                    <td class="td"><input type="text" class="quan" id="8-1"></td>
                    <td class="td"><input type="text" class="much" id="8-2"></td>
                    <td class="ppp" id="p8"></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>
                <tr>
                    <th>引き出物</th>
                    <td class="td"><input type="text" class="quan" id="9-1"></td>
                    <td class="td"><input type="text" class="much" id="9-2"></td>
                    <td class="ppp" id="p9"></td>
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
                    <th rowspan="2" class="row">料理</th>
                    <th>大人</th>
                    <td class="td"><input type="text" class="quan" id="10-1"></td>
                    <td class="td"><input type="text" class="much" id="10-2"></td>
                    <td class="price" id="p10"></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>       
                <tr>    
                    <th>子供</th>
                    <td class="td"><input type="text" class="quan" id="11-1"></td>
                    <td class="td"><input type="text" class="much" id="11-2"></td>
                    <td class="price" id="p11"></td>
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
                    <th rowspan="2" class="row">演出</th>
                    <th>ケーキ入刀</th>
                    <td class="td"><input type="text" class="quan" id="12-1"></td>
                    <td class="td"><input type="text" class="much" id="12-2"></td>
                    <td class="price" id="p12"></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>       
                <tr>    
                    <th>キャンドルサービス</th>
                    <td class="td"><input type="text" class="quan" id="13-1"></td>
                    <td class="td"><input type="text" class="much" id="13-2"></td>
                    <td class="price" id="p13"></td>
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
                    <th rowspan="4" class="row">装花</th>
                    <th>ウェディングケーキ</th>
                    <td class="td"><input type="text" class="quan" id="14-1"></td>
                    <td class="td"><input type="text" class="much" id="14-2"></td>
                    <td class="price" id="p14"></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>       
                <tr>    
                    <th>メインテーブル</th>
                    <th class="td"><input type="text" class="quan" id="15-1"></td>
                    <td class="td"><input type="text" class="much" id="15-2"></td>
                    <td class="price" id="p15"></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>
                <tr>    
                    <th>卓上</th>
                    <td class="td"><input type="text" class="quan" id="16-1"></td>
                    <td class="td"><input type="text" class="much" id="16-2"></td>
                    <td class="price" id="p16"></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>
                <tr>    
                    <th>ブライダルキャンドル</th>
                    <td class="td"><input type="text" class="quan" id="17-1"></td>
                    <td class="td"><input type="text" class="much" id="17-2"></td>
                    <td class="price" id="p17"></td>
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
                    <th rowspan="2" class="row">花束</th>
                    <th>両親への贈呈用</th>
                    <td class="td"><input type="text" class="quan" id="18-1"></td>
                    <td class="td"><input type="text" class="much" id="18-2"></td>
                    <td class="price" id="p18"></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>       
                <tr>    
                    <th>新郎新婦への贈呈用</th>
                    <th class="td"><input type="text" class="quan" id="19-1"></td>
                    <td class="td"><input type="text" class="much" id="19-2"></td>
                    <td class="price" id="p19"></td>
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
                    <th rowspan="2" class="row">写真</th>
                    <th>スタジオ</th>
                    <td class="td"><input type="text" class="quan" id="20-1"></td>
                    <td class="td"><input type="text" class="much" id="20-2"></td>
                    <td class="price" id="p20"></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>       
                <tr>    
                    <th>スナップ</th>
                    <td class="td"><input type="text" class="quan" id="21-1"></td>
                    <td class="td"><input type="text" class="much" id="21-2"></td>
                    <td class="price" id="p21"></td>
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
                    <th rowspan="6" class="row">心付け</th>
                    <th>会場係</th>
                    <td class="td"><input type="text" class="quan" id="22-1"></td>
                    <td class="td"><input type="text" class="much" id="22-2"></td>
                    <td class="price" id="p22"></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>       
                <tr>    
                    <th>美容師</th>
                    <td class="td"><input type="text" class="quan" id="23-1"></td>
                    <td class="td"><input type="text" class="much" id="23-2"></td>
                    <td class="price" id="p23"></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>
                <tr>    
                    <th>着付係</th>
                    <td class="td"><input type="text" class="quan" id="24-1"></td>
                    <td class="td"><input type="text" class="much" id="24-2"></td>
                    <td class="price" id="p24"></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>
                <tr>    
                    <th>写真家</th>
                    <td class="td"><input type="text" class="quan" id="25-1"></td>
                    <td class="td"><input type="text" class="much" id="25-2"></td>
                    <td class="price" id="p25"></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>
                <tr>    
                    <th>受付係</th>
                    <td class="td"><input type="text" class="quan" id="26-1"></td>
                    <td class="td"><input type="text" class="much" id="26-2"></td>
                    <td class="price" id="p26"></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>
                <tr>    
                    <th>契約人</th>
                    <td class="td"><input type="text" class="quan" id="27-1"></td>
                    <td class="td"><input type="text" class="much" id="27-2"></td>
                    <td class="price" id="p27"></td>
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
                    <th rowspan="3" class="row">その他</th>
                    <td class="td"><input type="text" class="other"></td>
                    <td class="td"><input type="text" class="quan" id="28-1"></td>
                    <td class="td"><input type="text" class="much" id="28-2"></td>
                    <td class="price" id="p28"></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>       
                <tr>    
                    <th class="td"><input type="text" class="other"></th>
                    <td class="td"><input type="text" class="quan" id="29-1"></td>
                    <td class="td"><input type="text" class="much" id="29-2"></td>
                    <td class="price" id="p29"></td>
                    <td class="td"><input type="text" class="memo"></td>
                </tr>
                <tr>    
                    <th class="td"><input type="text" class="other"></th>
                    <td class="td"><input type="text" class="quan" id="30-1"></td>
                    <td class="td"><input type="text" class="much" id="30-2"></td>
                    <td class="price" id="p30"></td>
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