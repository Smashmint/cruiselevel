<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;

class AppController extends Controller
{
    public function index()
    {
        return view('app.index');
    }

    public function password()
    {
        return view('app.password');
    }

    public function updatePassword(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|confirmed|min:6',
        ]);

        $user = auth()->user();

        $user->password = Hash::make($request->password);

        $user->save();

        flash('Your password has been changed.')->success();

        return redirect()->route('app.password');
    }

    public function profile()
    {
        return view('app.profile');
    }

    public function updateProfile(Request $request)
    {
        $this->validate($request, [
            'name'  => 'required',
            //'email' => 'required|email|unique:users,email',
        ]);

        $user = auth()->user();

        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();

        flash('Your profile is updated.')->success();

        return redirect()->route('app.profile');
    }
}
