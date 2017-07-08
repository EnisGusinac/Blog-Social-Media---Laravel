<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
use Image;


class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.createpost');
    }

    public function store(Request $request)
    {
        Post::create($request->all());

        return redirect('home');
//        Post::create([
//        'user_id' => Auth::user()->id,
//        'content' => $request->content,
//       'post_on' => $request->post_on;
//        ]);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.showpost', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.editpost', compact('post'));
    }

    public function update($postId, Request $request) {
        $post = Post::findOrFail($postId);
        $post->content = $request->input('content');
        $post->save();
        return redirect('/home');
    }

    public function destroy($id)
    {
        Post::destroy($id);

        return redirect('/home');
    }

    public function likePost($postId, Request $request) {

        $postToLike = Post::find($postId);
        $postToLike->likes++;
        $postToLike->save();

        return response()->json([
            'numberOfNewLikes' => $postToLike->likes,
            'result' => sprintf("You liked this post [%d] with title [%s] did'nt you?", $postId, $postToLike->content),
        ]);
    }
}
