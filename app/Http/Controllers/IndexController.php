<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $endposts=Post::latest()->take(3)->get();
        $posts = Post::all();
        $categories = Category::all();
        return view ('index',compact('posts','categories','endposts'));
    }

    public function show(Post $post,User $user)
    {
        $endposts=Post::latest()->take(3)->get();
        $categories = Category::all();
        return view('show',['post'=>$post,'categories'=>$categories,'user'=>$user,'endposts'=>$endposts]);
    }
}
