<!DOCTYPE html>
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
                        <button type="submit">投稿</button>
                    </form>

                </div>
            </div>
        </div>
    </body>
</html>
