<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Picture;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{

    public function homepage(){
        $data['users'] = User::all()->count();
        $data['images'] = Picture::all()->count();
        $data['visitores'] = DB::table('histories')->distinct()->count('visited_ip');
        return view('interface.homepage',compact('data'));

    }

    public function view(){

    }

    //Checks token validation
    public function check(){

    }

}
