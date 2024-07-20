<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
}




class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $request->validate([
            'content' => 'required|max:255',
        ]);

        $post->comments()->create([
            'content' => $request->content,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('posts.show', $post)->with('success', 'Comment added successfully.');
    }
}
