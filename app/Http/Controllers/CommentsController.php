<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Auth;


class CommentsController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
//        return $comments;
        return view('comments.index', compact('comments'));
    }

    public function create()
    {
        return view('comments.create');
    }

    public function store(Request $request)
    {
        Comment::create($request->all());
        return view('home');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update($postId, Request $request)
    {

    }

    public function destroy($id)
    {

    }

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
