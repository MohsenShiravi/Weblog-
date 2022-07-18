<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $categories = Category::all();
        return view ('index',compact('posts','categories'));
    }
}
