<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function show()
    {
        $posts = Post::all();
        $categories = Category::all();
        return view('index',['categories'=>$categories,'posts'=>$posts]);
    }
public function create()
{
    $categories = Category::all();
    return view('dashboard.posts.create',['categories'=>$categories]);
}

    public function store(PostRequest $request)
    {
        Post::query()->create([
            'title'=>$request->get('title'),
            'short_content'=>$request->get('short_content'),
            'content'=>$request->get('content'),
            'category_id'=>$request->get('category_id'),
            'user_id'=>Auth::id(),
            'status'=>$request->get('status'),
        ]);
        //$posts->tags()->attach($request->get('tags'));
        return redirect()->route('posts.index');
    }

    public function index()
    {
        $posts = Post::all();
        return view ('dashboard.posts.index',compact('posts'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('dashboard.posts.edit',['post'=>$post,'categories'=>$categories]);
    }

    public function update(PostRequest $request , Post $post)
    {
        $post->update([
            'title'=>$request->get('title'),
            'short_content'=>$request->get('short_content'),
            'content'=>$request->get('content'),
            'category_id'=>$request->get('category_id'),
            'status'=>$request->get('status'),
        ]);
        //$post->tags()->sync($request->get('tags'));
        return redirect()->route('posts.index');
    }
    public function destroy(Post $post)
    {
        $post->image()->detach();
        //$post->tags()->detach();

        $post->delete();
        return redirect()->route('posts.index');
    }
}


