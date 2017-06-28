<?php

namespace App\Http\Controllers;

use function foo\func;
use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function profile($username)
    {
        $user = User::where('username', $username)->first();
//        return $user;
        return view('user.profile', compact('user'));

    }
}
