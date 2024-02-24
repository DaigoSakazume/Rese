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

class MypageController extends Controller
{
    public function menu()
    {
        return view('menu');
    }

    public function mypage(Like $like, Request $request)
    {
        $reservations = Reservation::all();
        $user = Auth::user();
        $likes = Like::all();

        return view('mypage', compact('user', 'reservations', 'likes'));
    }

    public function detail($id)
    {
        $shop = Shop::find($id);
        $user = Auth::user();

        return view('detail', compact('shop', 'user'));
    }
}
