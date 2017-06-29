<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        return view('posts.createpost');
    }

    public function store(Request $request)
    {
        return $request->all();
    }

    public function show($id)
    {

    }



}
