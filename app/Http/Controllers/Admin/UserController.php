<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUser;
use App\Models\Picture;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('admin.users.list', compact('users'));
    }


    public function create()
    {
        return view('admin.users.create');
    }


    public function store(StoreUser $request)
    {
        $request['password'] = Hash::make($request['password']);
        User::create($request->all());
        return redirect(route('admin.users.index'));
    }


    public function show(User $user)
    {
        $pictures = Picture::where('user_id', $user->id)->get();
        return view('admin.histories.show', compact('user', 'pictures'));
    }


    public function edit(User $user)
    {
        return view('admin.users.edit', ['user' => $user]);
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index');
    }
}
