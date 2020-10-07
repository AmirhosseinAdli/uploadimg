<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\History;
use App\Models\Picture;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $total_image = auth()->user()->pictures()->count();

        $active_image = auth()->user()->pictures()->where('state','active')->count();

        $history = auth()->user()->histories()->count();

        $data = [
            'history' => $history ?? null,
            'active_image' => $active_image,
            'total_image' => $total_image,
        ];

        return view('panel.dashboard')->withData($data);
    }

}
