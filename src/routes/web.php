<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\LikeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('auth')->group(function () {
    Route::get('/', [ShopController::class, 'index']);
    Route::post('/logout', [AuthController::class, 'logout']);
});
Route::get('/mypage', [MypageController::class, 'mypage']);
Route::get('/menu', [MypageController::class, 'menu']);
Route::get('/done', [MypageController::class, 'done']);
Route::get('/register', [AuthController::class, 'getRegister']);
Route::post('/register', [AuthController::class, 'postRegister']);
Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin']);
Route::get('/like/add/{shop}', [LikeController::class, 'addLike'])->name('addLike');
Route::get('/like/delete/{shop}', [LikeController::class, 'deleteLike'])->name('deleteLike');
Route::get('/search', [ShopController::class, 'search']);
Route::get('/detail/{id}', [ShopController::class, 'detail']);
Route::post('/reservation', [ShopController::class, 'reserve']);
Route::get('/done', [ShopController::class, 'done']);