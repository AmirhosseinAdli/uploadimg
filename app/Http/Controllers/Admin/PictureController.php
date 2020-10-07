<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Picture;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Null_;

class PictureController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pictures = Picture::all();
        return view('admin.pictures.list', compact('pictures'));

    }

    public function create()
    {
        $slug = Str::random(10) . Carbon::now()->timestamp;
        $token = crc32(Str::random(20));
        return view('admin.pictures.create', compact('token', 'slug'));
    }

    public function expire(Picture $picture)
    {
        $picture->expire_time = Carbon::now()->toDateTimeString();;
        $picture->save();
        return redirect()->route('admin.pictures.index');
    }

    public function store(Request $request)
    {
        $picture_main =  Carbon::now()->timestamp . "." . $request->file('picture')->getClientOriginalExtension();
        $request->file('picture')->storeAs('pictures', $picture_main);
        $picture_main = 'pictures/'. $picture_main;

        $picture_deactive = Carbon::now()->timestamp . "." . $request->file('holder')->getClientOriginalExtension();
        $request->file('holder')->storeAs('holders', $picture_deactive);
        $picture_deactive = 'holders/'. $picture_deactive;

        Picture::create([
            'expire_time' => $request->get('data'),
            'max_count' => $request->get('maxView'),
            'picture_main' => $picture_main,
            'picture_deactive' => $picture_deactive,
            'slug' => $request->get(slug),
            'token' => $request->get(token)
        ]);
        return redirect()->route('admin.pictures.index');
    }



    public function show(Picture $picture)
    {
        return view('admin.pictures.show',compact('picture'));
    }

    public function edit(Picture $picture)
    {
        $slug = Str::random(10) . Carbon::now()->timestamp;
        $token = crc32(Str::random(20));
        return view('admin.pictures.edit',compact('picture','slug','token'));
    }


    public function update(Request $request, Picture $picture)
    {
        if ($request->get('picture') != null){
            $picture_main =  Carbon::now()->timestamp . "." . $request->file('picture')->getClientOriginalExtension();
            $request->file('picture')->storeAs('pictures', $picture_main);
            $picture_main = 'pictures/'. $picture_main;
        }
        if ($request->get('holder') != null) {
            $picture_deactive = Carbon::now()->timestamp . "." . $request->file('holder')->getClientOriginalExtension();
            $request->file('holder')->storeAs('holders', $picture_deactive);
            $picture_deactive = 'holders/' . $picture_deactive;
        }
        $picture->update([
            'expire_time' => $request->get('data'),
            'max_count' => $request->get('maxView'),
            'picture_main' => $picture_main ?? $picture['picture_main'],
            'picture_deactive' => $picture_deactive ?? $picture['picture_deactive'],
            'slug' => $request->get(slug),
            'token' => $request->get(token)
        ]);
        return redirect()->route('admin.pictures.index');
    }

    public function destroy(Picture $picture)
    {
        $picture->delete();
        return redirect()->route('admin.pictures.index');
    }
}
