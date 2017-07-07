<?php

namespace App\Http\Controllers;

use function foo\func;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Image;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function profile($username)
    // {
    //     //Will get the username from the URL
    //     $user = User::whereUsername($username)->first();
    //     return view('user.profile', compact('user'));
    // }

    public function testAdmin() {

        if (Auth::check() && Auth::user()->admin) {
            dd('dosao si ' .  Auth::user()->admin);
        }
        return redirect('home');

    }
    public function users()
    {
        // add check fo auth user AND admin user
        // oterwise redirect to home
        if(Auth::check() && Auth::user()->admin) {
            // get all users
            $userList = User::all();
            return view('admin.users', compact('userList'));
        }
        else{
            return redirect('home');
        }
    }

    public function profileRoute()
    {
        return view('user.profile', array('user' => Auth::user()) );
    }

    public function update_avatar(Request $request)
    {
        //Handle the user upload avatar
        //Here I google: Image intervention - install
        if ($request->hasFile('avatar'))
        {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename));

            // get the currently logged in user
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        return view('user.profile', array('user' => Auth::user()) );
    }
}
