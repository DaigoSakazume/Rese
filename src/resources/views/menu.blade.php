<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Rese</title>
<link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
<link rel="stylesheet" href="{{ asset('css/menu.css') }}" />
</head>

<body>
<header class="header">
    <div class="header_icon">
        <a href="/"><p>×</p></a>
    </div>
</header>
<main>
    <div class="menu">
        <div class="home">
            <a href="/">Home</a>
        </div>
        @if (Auth::check())
            <div class="logout">
                <form class="form" action="/logout" method="post">
                    @csrf
                    <button class="logout" type="submit">Logout</button>
                </form>
            </div>
            <div class="mypage">
                <a href="/mypage">Mypage</a>
            </div>
                @else
                <div class="registration">
                    <a href="/register">Registration</a>
                </div>
                <div class="login">
                    <a href="/login">Login</a>
            </div>
        @endif
    </div>
</main>
<footer>
</footer>
</body>

</html>