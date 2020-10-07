<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use Illuminate\Http\Request;

class ViewController extends Controller
{

    public function homepage()
    {
        return view('interface.homepage');
    }

    public function view(Picture $picture, Request $request)
    {
        return view('interface.token.test')->with('picture',$picture);
    }

    //Checks token validation
    public function check(Request $request)
    {
        $picture = Picture::where('slug',$request['picture'])->first();
        if ($request['token'] == $picture->token) {
            return view('interface.token.show')->with('picture', $picture);
        }
        return view('interface.token.test')->with('picture', $picture->picture_deactive);
    }

}
