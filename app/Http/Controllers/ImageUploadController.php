<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageUploadController extends Controller
{

    public function index()
{
        $images = Image::all();
        return view('index', ['path' => $images]);
}
    public function store(Request $request)
    {

    
        // ディレクトリ名
        $dir = 'sample';

        // アップロードされたファイル名を取得
        $file_name = $request->file('image')->getClientOriginalName();
        // 取得したファイル名で保存
        $request->file('image')->storeAs('public/' . $dir, $file_name);

        // ファイル情報をDBに保存
        $image = new Image();
        $image->folder_id = $request->input('id');
        $image->path = 'storage/' . $dir . '/' . $file_name;
        $image->save();
        return view('welcome');
    }
    
}

