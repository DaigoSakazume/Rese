<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Rese</title>
<link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
<link rel="stylesheet" href="{{ asset('css/login.css') }}" />
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
    <div class="login_form">
        <div class="form_title">
            <p>Login</p>
        </div>
        <form class="form" action="/login" method="post">
            @csrf
            <div class="form__group">
                <div class="form__group-content">
                    <div class="form__input--email">
                        <input type="email" class="email" name="email" value="{{ old('email') }}" placeholder="Email"/>
                    </div>
                    <div class="form__error">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-content">
                    <div class="form__input--password">
                        <input class="password" type="password" name="password" placeholder="Password"/>
                    </div>
                    <div class="form__error">
                    @error('password')
                    {{ $message }}
                    @enderror
                    </div>
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">ログイン</button>
            </div>
        </form>
    </div>
    <div class="form__register">
        <p class="register_text">アカウントをお持ちでない方はこちらから</p>
        <a href="/register">会員登録</a>
    </div>
</main>
<footer>
</footer>
</body>

</html>