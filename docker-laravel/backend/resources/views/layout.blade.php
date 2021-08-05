<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <title>一覧</title>
</head>
<body>
   <div class="container">
            <header class="header_container">
                <h1 class="title_log">Q&A</h1>
                <div class="search">
                    <input
                        type="search"
                        name="search"
                        placeholder="キーワードで検索"
                    />
                    <input type="submit" name="submit" value="検索" />
                </div>
                <ul class="header_menu">
                    <li>
                        <a href="#">質問する</a>
                    </li>
                    <li>
                        <a href="#">ランダムに質問を表示</a>
                    </li>
                    <li>
                        <a href="#">マイページ</a>
                    </li>
                </ul>
            </header>
            <div>
              @yield('content')
            </div>
            <footer>
                <p>
                    <small>©2021 - Kentaro Henmmi</small>
                </p>
            </footer>
        </div>
</body>
</html>
