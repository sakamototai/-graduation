<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ビデオルーム </title>
    <link rel="stylesheet" href="css/online.css">
  </head>
  <body>
    <div class="container">
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
    <script src="//cdn.webrtc.ecl.ntt.com/skyway-4.4.3.js"></script>
    <script src="js/key.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>