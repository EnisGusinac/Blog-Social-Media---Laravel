<?php

namespace App\Http\Controllers;

use function foo\func;
use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function index($username)
    {
        $user = User::where('username', $username)->first();
        return $user;

    }
}
