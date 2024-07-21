<html>
    <head>
        <title>PostResult</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="{{ asset('css/resultPage.css') }}">
        </style>
    </head>
    <body>
        <div class="app">
            <div class="header"><h1>PostResult</h1></div>

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

                    <h2>入力内容</h2>
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
                </div>
            </div>
        </div>
    </body>
</html>