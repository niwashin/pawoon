<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = \App\User::get();

        return view('home', compact('users'));
    }

    public function show(Request $request)
    {
        $users = \App\User::get();

        return $users;
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|unique:users,nama|max:255',
            'alamat' => 'required|max:255',
        ]);

        $user = new \App\User;
        $user->nama = $request->nama;
        $user->alamat = $request->alamat;
        $user->uuid = str_random(60);

        return $user->save();
    }
}
