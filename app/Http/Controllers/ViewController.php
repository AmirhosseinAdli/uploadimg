<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Picture;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{

    public function homepage()
    {

        $data['users'] = User::count();
        $data['images'] = Picture::count();
        $data['visitores'] = History::where('operation', config('enums.histories.operations.visited'))->count();

        return view('interface.homepage')->withData($data);

    }

    public function view()
    {

    }

    //Checks token validation
    public function check()
    {

    }

}
