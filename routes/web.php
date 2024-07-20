<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\CommentController;
use App\Http\Controllers\WelcomeController;

//ルート設定を変更
Route::get('/', [WelcomeController::class, 'index']);

// コメントを保存するためのルート
Route::post('/comments', [CommentController::class, 'store']);

// Route::get('/', function () {
//     return view('homePage');
// });

// ホーム画面(homePage)のURL割当、起動コントローラ・関数指定
Route::get('welcome', 'App\Http\Controllers\WelcomeController@index'); 

// ホーム画面(homePage)のURL割当、起動コントローラ・関数指定
Route::get('homepage', 'App\Http\Controllers\homeController@moveHomePage'); 

//結果画面(resultPage)のURL割当、起動コントローラ・関数指定
Route::post('formPosts', 'App\Http\Controllers\postController@formPosts');

//投稿画面(postPage)のURL割当、起動コントローラ・関数指定
Route::get('postPage', 'App\Http\Controllers\postController@movePostPage');
