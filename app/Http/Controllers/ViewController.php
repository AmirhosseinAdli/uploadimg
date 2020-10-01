<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{

    public function homepage(){
        return view('interface.homepage');
    }

    public function view(){

    }

    //Checks token validation
    public function check(){

    }

}
