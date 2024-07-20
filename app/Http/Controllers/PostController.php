<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class PostController extends Controller
{
    public function  __construct()
    {
        return $this->middleware(['auth']);
    }


    public function index()
    {
        $post = Post::all();

        return  view('posts.index', [
            'posts' => $post
        ]);
    }

    public function create()
    {
        $categories = Category::all();

        return view('posts.create', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'body' => ['required'],
            'category_id' => ['required']

        ]);

        Post::create([
            'title' => $request['title'],
            'category_id' => $request['category_id'],
            'body' => $request['body'],
            'url' => $request['url'],
            'user_id' => Auth::id()

        ]);

        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function edit(Post $post)
    {
        $categories = Category::all();

        return view('posts.show', [
            'categories' => $categories,
            'post' => $post
        ]);
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => ['required'],
            'category_id' => ['required'],
            'body' => ['required']
        ]);

        $post ->title =$request['title'];
        $post ->body =$request ['body'];
        $post ->category_id=$request ['category_id'];
        $post -> user_id= Auth::id();

        $post ->save();

        return redirect()->route('posts.show',[
                 'posts'=>$post
        ]);
    }
  
 

     public function destroy(Post $post)
     {
       $post->delete();
       
       return redirect()-> route('posts.index');
     }

     
}
