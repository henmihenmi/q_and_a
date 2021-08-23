<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>一覧</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ route('questions.index') }}">Q&Aサイト</a>
            <div>
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('questions.create') }}">質問する</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div>
            @yield('content')
        </div>
        <footer>
            <p>
                <small>©2021 - Kentaro Henmi</small>
            </p>
        </footer>
    </div>
</body>
</html>
