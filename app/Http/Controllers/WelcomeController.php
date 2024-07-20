<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folder;

class WelcomeController extends Controller
{
    // フォルダのリストを表示するメソッド
    public function index()
    {
        // フォルダデータを取得
        $folders = Folder::all();

        // フォルダデータをビューに渡す
        return view('welcome', compact('folders'));
    }
}
