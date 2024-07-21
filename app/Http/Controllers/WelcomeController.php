<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folder;

class WelcomeController extends Controller
{
    // フォルダのリストを表示するメソッド
    public function index()
    {
        $folders = Folder::with('comments', 'images')->get();
        return view('welcome', ['folders' => $folders]);
    }
}
