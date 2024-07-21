<!DOCTYPE html>
<html>
<head>
    <title>画像アップロード</title>
</head>
<body>
    <h1>画像アップロードページ</h1>

    <form method="POST" action="/image_upload" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image">
    <input type="hidden" name="id" value="{{ $id }}">
    <button>アップロード</button>
    </form>

    <!-- ホームページに戻るためのフォーム -->
    <form action="/welcome" method="GET">
        @csrf
        <button type="submit">ホームページに戻る</button>
    </form>
</body>
</html>
