<?php

namespace App\Http\Controllers;
use App\Models\Folder;

use Illuminate\Http\Request;

class imagepageController extends Controller
{
    public function next(Request $request) 
    {   $folder = new Folder();
        // バリデーション
        $request->validate([
            'name' => 'required|string|max:20',
            'place' => 'required|string|max:20',
            'color' => 'required|string|max:20',
            'shape' => 'required|string|max:20',
            'time' => 'required|string|max:20',
            ]);
        
        $folder->name = $request->name;
        $folder->place = $request->place;
        $folder->color = $request->color;
        $folder->shape = $request->shape;
        $folder->time = $request->time;
        $folder->id = $request->id;
        $folder->save();
        // すべてのフォルダ情報を取得
        $folders = Folder::all();

        // データをビューに渡す
        return view('welcome', compact('folders'));
    }
}
