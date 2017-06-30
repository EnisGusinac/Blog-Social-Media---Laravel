<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
use DB;


class PostsController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->get();

//        $posts = Post::paginate(10);
//        return $posts;
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.createpost');
    }

    public function store(Request $request)
    {
        Post::create($request->all());

        return redirect('posts');
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
