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
use App\Http\Controllers\imagepageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ImageUploadController;

//ルート設定を変更
Route::get('/', [WelcomeController::class, 'index']);

//ルート設定を変更
Route::get('/next', [WelcomeController::class, 'index']);

// コメントを保存するためのルート
Route::post('/comments', [CommentController::class, 'store']);

//画像を保存するルート
Route::post('/image_upload', [ImageUploadController::class, 'store']);

// 画像保存ページへの遷移
Route::post('/next', [imagepageController::class, 'next']); 

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
