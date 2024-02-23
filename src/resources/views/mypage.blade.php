<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Rese</title>
<link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}" />
</head>

<body>
<header class="header">
    <div class="header_icon">
        <p>━━<br>━━━━<br>━</p>
    </div>
    <div class="header__title">
        <h1>Rese</h1>
    </div>
</header>
<main>
    <div class="name">
        <p>{{ auth()->user()->name }}さん</p>
    </div>
    <div class="content">
        <div class="reservation">
            <p>予約状況</p>
        </div>
        <div class="like">
            <p>お気に入り店舗</p>
        </div>
    </div>
</main>
<footer>
</footer>
</body>

</html>