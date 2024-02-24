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

class LikeController extends Controller
{
    public function addLike(Shop $shop, Request $request)
    {
        $like = new Like();
        $like->shop_id = $shop->id;
        $like->user_id = Auth::user()->id;
        $like->save();
        return back();
    }

    public function deleteLike(Shop $shop, Request $request)
    {
        $user = Auth::user()->id;
        $like = Like::where('shop_id', $shop->id)->where('user_id', $user)->first();

        if ($like) {
            $like->delete();
        }

        return back();
    }
}
