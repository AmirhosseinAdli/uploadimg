<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Picture;
use App\Traits\HistoryTrait;
use Illuminate\Http\Request;

class PictureController extends Controller
{
    use HistoryTrait;

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {

        HistoryTrait::upload($picture);
    }


    public function show(Picture $picture)
    {
        return view('admin.pictures.show', compact('picture'));
    }


    public function edit(Picture $picture)
    {
        //
    }


    public function update(Request $request, Picture $picture)
    {
        //
    }


    public function destroy(Picture $picture)
    {
        //
    }
}
