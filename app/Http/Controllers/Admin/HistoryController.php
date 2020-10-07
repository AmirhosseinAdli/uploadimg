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
        return view('admin.histories.list', compact('pictures'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(History $history)
    {
        //
    }


    public function edit(History $history)
    {
        //
    }


    public function update(Request $request, History $history)
    {
        //
    }


    public function destroy(History $history)
    {
        //
    }
}
