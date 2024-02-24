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
        <a href="/menu"><p>━━<br>━━━━<br>━</p></a>
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
            <div class="content_title"><p>予約状況</p></div>
            <div class="reservation_list">
            @foreach ($reservations as $reservation)
                <div class="my_reservation">
                    <div class="reservation_header">
                        <p>予約{{$reservation->id}}</p>
                        <div class="delete_button">
                            <form action="/reservation/delete" method="post">
                            @csrf
                                <input type="hidden" name="id" value="{{ $reservation->id }}">
                                <button class="delete" type="submit"></button>
                            </form>
                        </div>
                    </div>
                    <div class="reservation_info">
                        <table>
                            <tr>
                                <th>Shop</th>
                                <td>{{ $reservation->shop->name }}</td>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <td>{{$reservation->date}}</td>
                            </tr>
                            <tr>
                                <th>Time</th>
                                <td>{{$reservation->time}}</td>
                            </tr>
                            <tr>
                                <th>Number</th>
                                <td>{{$reservation->number}}人</td>
                            </tr>
                        </table>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
        <div class="like">
            <div class="content_title">
                <p>お気に入り店舗</p>
            </div>
            <div class="my_favorite">
                @foreach ($likes as $like)
                <div class="shop">
                    <div class="image">
                        <img src="{{$like->shop->image_url}}" alt="画像">
                    </div>
                    <div class="shop_info">
                        <div class="shop_name"><p>{{$like->shop->name}}</p></div>
                        <div class="tag">
                            <p>#{{ $like->shop->area->name }}</p>
                            <p>#{{ $like->shop->genre->name }}</p>
                        </div>
                        <div class="shop_info--bottom">
                            <form class="detail" action="/detail/{{ $like->shop->id }}" method="get">
                                @csrf
                                <div class="more">
                                    <button class="more_button" type="submit">詳しくみる</button>
                                </div>
                            </form>
                            @if($like)
                            <a href="{{ route('deleteLike', $like->shop) }}"><button class="hearted"></button></a>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</main>
<footer>
</footer>
</body>

</html>