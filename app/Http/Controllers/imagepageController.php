<?php

namespace App\Http\Controllers;
use App\Models\Folder;

use Illuminate\Http\Request;

class imagepageController extends Controller
{
    public function next(Request $request) 
    {   $folder = new Folder();
        $folder->name = $request->name;
        $folder->place = $request->place;
        $folder->color = $request->color;
        $folder->shape = $request->shape;
        $folder->time = $request->time;
        $folder->id = $request->id;
        //$folder->save();
        return view('imagePage',$folder);
    }
}
