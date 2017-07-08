<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;


class CommentsController extends Controller
{
    public function index()
    {
        $comments = Message::latest();
        return view('comments.index', compact('comments'));
    }

    public function create()
    {
        return view('comments.create');
    }
//
//    public function store(Request $request)
//    {
//        Post::create($request->all());
//
//        return redirect('home');
//    }
//
//    public function show($id)
//    {
//        $comments = Comments::findOrFail($id);
//        return view('comments.show', compact('comments'));
//    }
//
//    public function edit($id)
//    {
//        $comments = Comments::findOrFail($id);
//        return view('comments.edit', compact('comments'));
//    }
//
//    public function update($postId, Request $request) {
//        $post = Post::findOrFail($postId);
//        $post->content = $request->input('content');
//        $post->save();
//        return redirect('/home');
//    }
//
//    public function destroy($id)
//    {
//        Post::destroy($id);
//
//        return redirect('/home');
//    }
////



//    public function likePost($postId, Request $request) {
//
//        $postToLike = Post::find($postId);
//        $postToLike->likes++;
//        $postToLike->save();
//
//        return response()->json([
//            'numberOfNewLikes' => $postToLike->likes,
//            'result' => sprintf("You liked this post [%d] with title [%s] did'nt you?", $postId, $postToLike->content),
//        ]);
//    }
}
