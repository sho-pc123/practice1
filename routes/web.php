<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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

//home画面
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/home', [HomeController::class, 'index'])->name('home');

//新規登録画面
Route::get('/register', function(){
    return view('register');
});
//新規登録処理
Route::post('/register', [AuthController::class, 'register'])->name('register');
//ログイン画面
Route::get('/login', function(){
    return view('login');
});
//ログイン処理
Route::post('/login', [AuthController::class, 'login'])->name('login');
//ログアウト
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//mypage
Route::get('/mypage', [UserController::class, 'mypage'])->name('mypage');
//各情報設定
Route::get('/mypage/settings', [UserController::class, 'setting'])->name('setting');

//個人情報設定
Route::get('/mypage/settings/personal-info', [UserController::class, 'personal-info'])->name('personal-info');
Route::post('/mypage/settings/update', [UserController::class, 'update'])->name('update');

//メールアドレス設定

//ログインパスワード設定


//ユーザー名設定

//アイコン設定

//自己紹介設定

//仕事の設備・環境設定

//興味のある仕事設定

//スキル設定

//利用できるツール設定

//経験した職種設定

//一日に可能な作業時間設定

//仕事の継続希望設定

//報酬受け取り口座設定












// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
