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
        <a href="{{action('postController@movePostPage')}}">投稿画面に戻る</a>
        
        <form action="/welcome" >
            @csrf
            <button type="submit">ホームページに戻る</button>
        </form>
    </body>
</html>