<!DOCTYPE html>
<html>
<head>
    <title>postPage</title>
</head>
<body>
    <h1>投稿画面</h1>

    <div>落とし物についての情報</div>

    <!-- 情報入力用フォーム -->
    <form action="/formPosts" method="POST">
        @csrf
        <div>種類：<input type="text" name="name"></div>
        <div>拾った場所：<input type="text" name="place"></div>
        <div>色：<input type="text" name="color"></div>
        <div>形状：<input type="text" name="shape"></div>
        <div>拾った日時：<input type="text" name="time"></div>
        <input type="hidden" name="folder_id" value="{$id}">
        <button type="submit">次へ</button>
    </form>

    <!-- ホームページに戻るためのフォーム -->
    <form action="/welcome" method="GET">
        @csrf
        <button type="submit">ホームページに戻る</button>
    </form>
</body>
</html>
