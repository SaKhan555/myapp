<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostCommentsController extends Controller
{
    public function store(Post $post)
    {
        request()->validate([
            'body' => ['required'],
        ]);

        $post->comments()->create([
            'user_id' => auth()->user()->id,
            'body' => request('body'),
        ]);
        return back()->with('success', 'Your comment is posted.');
    }
//    public function store(Post $post, Request $request)
//    {
//        $request->validate([
//            'body' => ['required'],
//        ]);
//        $post->comments()->create([
//            'user_id' => $request->user()->id,
//            'body' => $request->input('body'),
//        ]);
//    }
}
