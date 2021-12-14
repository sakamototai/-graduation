<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>オンライン相談</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/openclose.js"></script>
    <script src="js/fixmenu_pagetop.js"></script>
    <link rel="stylesheet" href="css/online.css">
  </head>
  <body class="bg2">
    <div class="container">
    <header>
            <h1 id="logo"><a href="index.html"><img src="images/logo2.png" alt="Macaroon Shop"></a></h1>
            <h2>CONSULTATION<span>オンライン相談</span></h2>
            <!--PC用（901px以上端末）メニュー-->
            <nav id="menubar">
                <ul>
                    <li><a href="home"><span>Home</span><span>ホーム</span></a></li>
                    <li><a href="schedule"><span>schedule</span><span>スケジュール</span></a></li>
                    <li><a href="budget"><span>budget</span><span>予算管理</span></a></li>
                    <li><a href="column"><span>column</span><span>コラム特集</span></a></li>
                    <li><a href="bridal_fair"><span>bridalfair</span><span>ブライダルフェア</span></a></li>
                    <li><a href="chat"><span>chat</span><span>チャット</span></a></li>
                    <li><a href="online_reserve"><span>consultation</span><span>オンライン相談</span></a></li>
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
                <li><a href="online_reserve"><span>consultation</span><span>オンライン相談</span></a></li>
            </ul>
            <ul class="icon">
                <li><a href="#"><img src="images/icon_facebook.png" alt="Facebook"></a></li>
                <li><a href="#"><img src="images/icon_twitter.png" alt="Twitter"></a></li>
                <li><a href="#"><img src="images/icon_instagram.png" alt="Instagram"></a></li>
                <li><a href="#"><img src="images/icon_youtube.png" alt="YouTube"></a></li>
                <li><a href="#"><img src="images/icon_line.png" alt="LINE"></a></li>
            </ul>
        </nav>
      <div class="online">
      <h1 class="heading">ビデオルーム</h1>
      <p class="note">
        Change Room mode (before join in a room):
        <a href="#">mesh</a> / <a href="#sfu">sfu</a>
      </p>
      <div class="room">
        <div>
          <video id="js-local-stream"></video>
          <span id="js-room-mode"></span>:
          <input type="text" placeholder="Room Name" id="js-room-id">
          <button id="js-join-trigger">参加</button>
          <button id="js-leave-trigger">退出</button>
        </div>

        <div class="remote-streams" id="js-remote-streams"></div>
        <div>
          <pre class="messages" id="js-messages"></pre>
          <input type="text" id="js-local-text">
          <button id="js-send-trigger">送信</button>
        </div>
      </div>
      <div>
        <button id="mutebtn">ミュート</button>
      </div>
      <div>
        <button id="vbtn">カメラオフ</button>
      </div>
      <p class="meta" id="js-meta"></p>
      </div>
      </div>
    <script src="//cdn.webrtc.ecl.ntt.com/skyway-4.4.3.js"></script>
    <script src="js/key.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>