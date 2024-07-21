<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folder;

class to_imagepage extends Controller
{
    public function moveimagepage(Request $request)
    {
            return view('imagePage');
    }
}
