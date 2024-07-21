<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folder;

class postController extends Controller
{
    public function movePostPage() 
    {
        return view('postPage');
    }

    public function formPosts(Request $request)
    {
        
        $folder = new Folder();
        $folder->name = $request->name;
        $folder->place = $request->place;
        $folder->color = $request->color;
        $folder->shape = $request->shape;
        $folder->time = $request->time;
        $folder->id = $request->folder_id;
        //$folder->save();
        return view('resultPage', $folder);
    }
}
