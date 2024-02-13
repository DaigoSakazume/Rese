<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Rese</title>
<link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
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
    <div class="thanks">
        <div class="message">
            <p>会員登録ありがとうございます</p>
        </div>
        <div class="login__button">
            <button onclick="location.href='/login'" class="login__button-submit" type="submit">ログインする</button>
        </div>
    </div>
</main>
<footer>
</footer>
</body>

</html>