<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Picture;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PictureController extends Controller
{

    public function index()
    {
        $pictures = Picture::all();
        $num=0;
        foreach ($pictures as $key =>$value)
        {
            $num++;
        }
        return view('panel.pictures.list',compact('pictures','num'));
    }


    public function create()
    {
        $token = Str::random(20);
        while (Picture::firstWhere('slug',$slug = crc32(Carbon::now()->timestamp)) != null);
        return view('panel.pictures.create',compact('token','slug'));
    }


    public function store(Request $request)
    {
          $picture_main = Carbon::now()->timestamp. '.' . $request->file('picture_main')->getClientOriginalExtension();
        $request->file('picture_main')->storeAs('picture_main',$picture_main);
        if ($request['picture_deactive'] != null){
            $picture_deactive = Carbon::now()->timestamp. '.' . $request->file('picture_deactive')->getClientOriginalExtension();
            $request->file('picture_deactive')->storeAs('picture_deactive',$picture_deactive);
        }

        $picture = $request->all();
        $picture['picture_main'] = 'picture_main/' . $picture_main;
        if ($request['picture_deactive'] != null) {
            $picture['picture_deactive'] = 'picture_deactive/' . $picture_deactive;
        }


            Picture::create($picture);
            return redirect()->route('panel.pictures.index');
    }




    public function test(Picture $picture)
    {
        $picture->expire_time = Carbon::now()->toDateTimeString();;
        $picture->save();
        return redirect()->route('panel.pictures.index');
    }


    public function edit(Picture $picture)
    {
        return view('panel.pictures.edit',compact('picture'));
    }


    public function update(Request $request, Picture $picture)
    {
//        $request->validate()
//        dd($request->toArray());

//        $picture_main = Carbon::now()->timestamp. '.' . $request->file('picture_main')->getClientOriginalExtension();
//        $request->file('picture_main')->storeAs('picture_main',$picture_main);
//        if ($request['picture_deactive'] != null){
//            $picture_deactive = Carbon::now()->timestamp. '.' . $request->file('picture_deactive')->getClientOriginalExtension();
//            $request->file('picture_deactive')->storeAs('picture_deactive',$picture_deactive);
//        }
//
//        $picture = $request->all();
//        $picture['picture_main'] = 'picture_main/' . $picture_main;
//        if ($request['picture_deactive'] != null) {
//            $picture['picture_deactive'] = 'picture_deactive/' . $picture_deactive;
//        }
//
//
//        Picture::update($picture);
//        return redirect()->route('panel.pictures.index');

        $picture->updated_at=$request->expire_time;
        $picture->max_count=$request->max_count;
        $picture->token=$request->token;
        $picture->slug=$request->slug;

        if ($request->picture_main){
            $pic=$request->picture_main->move(public_path('storage/images'),
                Carbon::now()->timestamp. '.' . $request->picture_main->getClientOriginalName());
            $picture->picture_main = explode('public',$pic)[1];
        }

        if ($request->picture_deactive){
            $pic2=$request->picture_deactive->move(public_path('storage/images'),
                Carbon::now()->timestamp. '.' .$request->picture_deactive->getClientOriginalName());
            $picture->picture_deactive = explode('public',$pic2)[1];
        }

        $picture->save();
        return redirect()->route('panel.pictures.index');
    }


    public function destroy(Picture $picture)
    {

        $picture->Delete();
        return redirect()->route('panel.pictures.index');
    }

}
