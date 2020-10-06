<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $total_image = Picture::all()->count();

        $active_image = Picture::all()
            ->where('state','=','active')
            ->where('user_id','=',auth()->id());

        $history = DB::table('histories')->distinct()->count('picture_id');

        return view('panel.dashboard',compact('total_image','active_image','history'));
    }
}
