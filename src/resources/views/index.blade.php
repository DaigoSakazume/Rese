<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Rese</title>
<link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
<header>
    <div class="header">
        <div class="header_main">
            <div class="header_icon">
                <a href="/menu"><p>━━<br>━━━━<br>━</p></a>
            </div>
            <div class="header__title">
                <h1>Rese</h1>
            </div>
        </div>
        <div class="search">
            <form class="search-form" action="/search" method="get">
                @csrf
                <div class="area">
                    <select class="area_category" name="area_id">
                        <option value="">All area</option>
                            @foreach ($areas as $area)
                            <option value="{{ $area['id'] }}">{{ $area['name'] }}</option>
                            @endforeach
                    </select>
                </div>
                <div class="genre">
                    <select class="genre_category" name="genre_id">
                        <option value="">All genre</option>
                        @foreach ($genres as $genre)
                        <option value="{{ $genre['id'] }}">{{ $genre['name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="text">
                    <input class="search-form__text" type="text" name="keyword" value="{{ old('keyword') }}" placeholder="Search...">
                </div>
            </form>
        </div>
    </div>
</header>
<main>
    <div class="shop_list">
        @foreach ($shops as $shop)
        <div class="shop">
            <div class="image">
                <img src="{{$shop->image_url}}" alt="画像">
            </div>
            <div class="shop_info">
                <div class="shop_name"><p>{{$shop->name}}</p></div>
                <div class="tag">
                    <p>#{{ $shop['area']['name'] }}</p>
                    <p>#{{ $shop['genre']['name'] }}</p>
                </div>
                <div class="shop_info--bottom">
                    <form class="detail" action="/detail/{{ $shop->id }}" method="get">
                        @csrf
                        <div class="more">
                            <button class="more_button" type="submit">詳しくみる</button>
                        </div>
                    </form>
                    @php
                    $like = $shop->like()->where('user_id', Auth::id())->exists();
                    @endphp
                    @if($like)
                        <a href="{{ route('deleteLike', $shop) }}"><button class="hearted"></button></a>
                    @else
                        <a href="{{ route('addLike', $shop) }}"><button class="heart"></button></a>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</main>
<footer>
</footer>
</body>

</html>