<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Rese</title>
<link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
<link rel="stylesheet" href="{{ asset('css/detail.css') }}" />
</head>

<body>
<header>
    <div class="header">
        <div class="header_main">
            <div class="header_icon">
                <p>━━<br>━━━━<br>━</p>
            </div>
            <div class="header__title">
                <h1>Rese</h1>
            </div>
        </div>
    </div>
</header>
<main>
    <div class="container">
        <div class="shop-details">
            <div class="shop_header">
                <div class="back_icon">
                    <a href="{{ url('/') }}">＜</a>
                </div>
                <div class="shop_title">
                    <h2>{{ $shop->name }}</h2>
                </div>
            </div>
            <div class="shop-image">
                <img src="{{ $shop->image_url }}" alt="{{ $shop->name }}">
            </div>
            <div class="shop-info">
                <div class="tag">
                    <p>#{{ $shop->area->name }}</p>
                    <p>#{{ $shop->genre->name }}</p>
                </div>
                <p class="description">{{ $shop->description }}</p>
            </div>
        </div>
        <div class="reservation">
            <form action="/reservation" method="post">
            @csrf
                <input type="hidden" name="shop_id" value="{{ $shop->id }}">
                <input type="hidden" name="user_id" value="{{ $user->id }}">
                <div class="reservation_detail">
                    <p>予約</p>
                    <input class="date" type="date" name="date">
                    <div class="form__error">
                        @error('date')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="time">
                        <select class="time_input" name="time">
                            <option value="">時間を選択</option>
                            <option value="9:00">9:00</option>
                            <option value="10:00">10:00</option>
                            <option value="11:00">11:00</option>
                            <option value="12:00">12:00</option>
                            <option value="13:00">13:00</option>
                            <option value="14:00">14:00</option>
                            <option value="15:00">15:00</option>
                            <option value="16:00">16:00</option>
                            <option value="17:00">17:00</option>
                            <option value="18:00">18:00</option>
                            <option value="19:00">19:00</option>
                            <option value="20:00">20:00</option>
                            <option value="21:00">21:00</option>
                            <option value="22:00">22:00</option>
                        </select>
                        <div class="form__error">
                            @error('time')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="number">
                        <select class="number_input" name="number">
                            <option value="">人数を選択</option>
                            <option value="1">1人</option>
                            <option value="2">2人</option>
                            <option value="3">3人</option>
                            <option value="4">4人</option>
                        </select>
                        <div class="form__error">
                            @error('number')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="confirm">
                        <table>
                            <tr>
                                <th>Shop</th>
                                <td>{{ $shop->name }}</td>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <td id="selected_date"></td>
                            </tr>
                            <tr>
                                <th>Time</th>
                                <td id="selected_time"></td>
                            </tr>
                            <tr>
                                <th>Number</th>
                                <td id="selected_number"></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="reservation_button">
                    <button class="reservation_button-submit" type="submit" style="cursor:pointer">予約する</button>
                </div>
            </form>
        </div>
    </div>
</main>
<footer>
</footer>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        // date input change event
        document.querySelector('.date').addEventListener('change', function (event) {
            document.getElementById('selected_date').textContent = event.target.value;
        });

        // time select change event
        document.querySelector('.time_input').addEventListener('change', function (event) {
            document.getElementById('selected_time').textContent = event.target.value;
        });

        // number select change event
        document.querySelector('.number_input').addEventListener('change', function (event) {
            document.getElementById('selected_number').textContent = event.target.value;
        });
        });
    </script>
</body>

</html>