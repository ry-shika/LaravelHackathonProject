<!DOCTYPE html>
<html>
<head>
    <title>投稿内容確認</title>
</head>
<body>
    <h1>POST結果</h1>
    <div>種類：{{$name}}</div>
    <div>拾った場所：{{$place}}</div>
    <div>色：{{$color}}</div>
    <div>形状：{{$shape}}</div>
    <div>拾った日時：{{$time}}</div>
    
    <form action="/postPage" method="GET">
        @csrf
        <button type="submit">戻る</button>
    </form>

    <form action="/next" method="POST">
        @csrf
        <input type="hidden" name="name" value="{{ $name }}">
        <input type="hidden" name="place" value="{{ $place }}">
        <input type="hidden" name="color" value="{{ $color }}">
        <input type="hidden" name="shape" value="{{ $shape }}">
        <input type="hidden" name="time" value="{{ $time }}">
        <input type="hidden" name="folder_id" value="{{ $id }}">
        <!-- <button type="submit">次へ</button> -->
    </form>
</body>
</html>
