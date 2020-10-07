<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{

    public function index()
    {
        $pictures = Auth::user()->pictures;
        return view('panel.histories.list', compact('pictures'));

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
