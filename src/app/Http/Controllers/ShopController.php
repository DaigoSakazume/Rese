<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Auth;

class ShopController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
