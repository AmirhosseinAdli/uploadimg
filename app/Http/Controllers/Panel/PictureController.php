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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $token = Str::random(20);
        while (Picture::firstWhere('slug',$slug = crc32(Carbon::now()->timestamp)) != null);
        return view('panel.pictures.create',compact('token','slug'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function show(Picture $picture)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Picture  $picture
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(Picture $picture)
    {


        return view('panel.pictures.edit',compact('picture'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Picture  $picture
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Picture $picture)
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


        Picture::update($picture);
        return redirect()->route('panel.pictures.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Picture  $picture
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Picture $picture)
    {
        $picture->softDelete();
        return redirect()->route('panel.pictures.index');
    }
}
