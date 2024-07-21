<!DOCTYPE html>
<html>
<head>
    <title>postPage</title>

    <meta charset="UTF-8" />
    <link rel="stylesheet" href="{{ asset('css/postPage.css') }}">
    </style>
  </head>
  <body>
    <div class="app">
      <div class="header"><h1>PostPage</h1></div>

      <div class="body">
        <div class="sidebar">
          <form action="/welcome" >
            @csrf
            <button class="homeButton">Home</button>
          </form>
          <div class="searchButton">
            <p class="search">Search<p>
          </div>
          <form action="/postPage" >
            @csrf
            <button class="postButton">Post</button>
          </form>
            <div class="loginButton">
              <p class="login">login<p>
            </div>
          </div>

        <div class="flex-content">

          <h2>落とし物についての新規投稿</h2>

          <form action="formPosts" method="POST">
            @csrf
            <div class="name">種類：<input type="text" class="nameText" placeholder="(例) ペン" name="name"></div>
            <div class="place">拾った場所：<input type="text" class="placeText" placeholder="(例) 東京都" name="place"></div>
            <div class="color">色：<input type="text" class="colorText" placeholder="(例) 赤" name="color"></div>
            <div class="shape">形状：<input type="text" class="shapeText" placeholder="(例) 丸い" name="shape"></div>
            <div class="time">拾った日時：<input type="text" class="timeText" placeholder="(例) 7/21 13:56" name="time"></div>
            <input type="submit" value="投稿">
          </form>
          <div class="radius_post">
            <form action="/postPage">
              @csrf
              <button class="submit">Post</button>
            </form>
          </div>
        </div>
        </div>
      </div>
    </div>
  </body>
</html>
