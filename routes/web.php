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

// ルート設定を変更
Route::get('/', [WelcomeController::class, 'index']);

// コメントを保存するためのルート
Route::post('/comments', [CommentController::class, 'store']);