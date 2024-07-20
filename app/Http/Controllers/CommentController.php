<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    // コメントを保存するメソッド
    public function store(Request $request)
    {
        // バリデーション
        $request->validate([
            'folder_id' => 'required|integer',
            'comment' => 'required|string|max:255',
        ]);

        // コメントの保存
        Comment::create([
            'folder_id' => $request->input('folder_id'),
            'comment' => $request->input('comment'),
        ]);

        // フォルダの一覧ページにリダイレクト
        return redirect('/')->with('success', 'Comment added successfully!');
    }
}
