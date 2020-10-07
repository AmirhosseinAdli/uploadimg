<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\History;
use App\Models\Picture;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $data = [
            'Total Images'  => Picture::count(),
            'Active Images' => Picture::where('state', 'active')->count(),
            'Users'         => User::count(),
            'Histories'     => History::count(),
        ];

        return view('admin.dashboard')->withData($data);
    }

}
