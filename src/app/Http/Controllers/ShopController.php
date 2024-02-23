<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Shop;
use App\Models\Reservation;
use App\Models\Area;
use App\Models\Genre;
use App\Models\Like;

class ShopController extends Controller
{
    public function index(Shop $shop)
    {
        $shops = Shop::with('area', 'genre')->get();
        $areas = Area::all();
        $genres = Genre::all();
        $user = Auth::user();
        $like = Like::where('shop_id', $shop->id)->where('user_id', $user)->first();

        return view('index', compact('shops', 'areas', 'genres', 'like', 'user'));
    }

    public function search(Shop $shop, Request $request)
    {
        $shops = Shop::with('area')->AreaSearch($request->area_id)->GenreSearch($request->genre_id)->KeywordSearch($request->keyword)->get();
        $areas = Area::all();
        $genres = Genre::all();
        $user = Auth::user();
        $like = Like::where('shop_id', $shop->id)->where('user_id', $user)->first();

        return view('index', compact('shops', 'areas', 'genres', 'like', 'user'));
    }

    public function detail($id)
    {
        $shop = Shop::find($id);
        $user = Auth::user();

        return view('detail', compact('shop', 'user'));
    }

    public function reserve(Request $request)
    {
        $reservation = $request->all();
        Reservation::create($reservation);
        return view('done');
    }
}