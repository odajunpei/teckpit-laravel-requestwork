<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
    //add
    public function index()
    {
        return view('profile.index');
    }

    public function confirm(ProfileRequest $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        // $a = $request->input('a');
        // $b = $request->input('b');
        return view('profile.confirm', ['username' => $username], ['password' => $password]);
    }
}
