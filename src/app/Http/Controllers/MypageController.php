<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class MypageController extends Controller
{
    public function menu()
    {
            return view('menu');
    }

    public function mypage()
    {
        return view('mypage');
    }

    public function done()
    {
        return view('done');
    }
}
