<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;


class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.showpost', compact('posts'));
    }

    public function create()
    {
        return view('posts.createpost');
    }

    public function store(Request $request)
    {
        Post::create($request->all());
//        Post::create([
//        'user_id' => Auth::user()->id,
//        'content' => $request->content,
//       'post_on' => $request->post_on;
//        ]);
    }

    public function show($id)
    {

    }



}
