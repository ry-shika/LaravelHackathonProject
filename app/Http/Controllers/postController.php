<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    public function movePostPage() 
    {
        return view('postPage');
    }

    public function formPosts(Request $request)
    {
        $data = [
            'name'=>$request->name,
            'place'=>$request->place,
            'color'=>$request->color,
            'shape'=>$request->shape,
            'time'=>$request->time,
        ];
        return view('resultPage', $data);
    }
}
