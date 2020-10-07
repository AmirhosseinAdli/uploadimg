<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\History;
use App\Models\Picture;
use Illuminate\Http\Request;

class HistoryController extends Controller
{

    public function index()
    {
        $pictures = Picture::all();
        return view('admin.histories.list')->withPictures($pictures);

//        $histories = History::groupBy('picture_id')->all();
//        return view('admin.histories.list')->withItems($histories);
    }


    public function show(History $history)
    {
        return view('admin.histories.show')->withHistory($history);
    }


    public function destroy(History $history)
    {
        $history->delete();
        return redirect()->route('admin.histories.index');
    }
}
