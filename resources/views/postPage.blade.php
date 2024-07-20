<html>
  <head>
    <title>postPage</title>
  </head>
  <body>
    <h1>投稿画面</h1>

    <div>落とし物についての情報</div>

    <form action="formPosts" method="POST">
      @csrf
      <div>種類：<input type="text" name="name"></div>
      <div>拾った場所：<input type="text" name="place"></div>
      <div>色：<input type="text" name="color"></div>
      <div>形状：<input type="text" name="shape"></div>
      <div>拾った日時：<input type="text" name="time"></div>
      <input type="submit" value="投稿">
    </form>

    <form action="/welcome" >
            @csrf
            <button type="submit">ホームページに戻る</button>
    </form>
  </body>
</html>