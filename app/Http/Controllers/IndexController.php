<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        $posts = Post::query()->where('is_confirm','1')->where('status','published')->get();
        $categories = Category::all();
        return view ('index',compact('posts','categories'));
    }


    public function store(Request $request)
    {
        if(auth()->user()){
            Comment::query()->create([
                'post_id'=>$request->get('post_id'),
                'user_id'=>Auth::id(),
                'content'=>$request->get('content'),
            ]);}
        else{
            Comment::query()->create([
                'post_id'=>$request->get('post_id'),
                'auther_name'=>$request->get('auther_name'),
                'mobile'=>$request->get('mobile'),
                'email'=>$request->get('email'),
                'content'=>$request->get('content'),
            ]);
        }

        return redirect()->back();
    }
    public function show(Post $post)
    {
        $comments=Comment::query()->where('post_id',$post->id)->where('is_confirm','1')->get();
        $categories = Category::all();
        return view('show',['post'=>$post,'categories'=>$categories,'comments'=>$comments]);
    }
    public function search(Request $request){
        $search = $request->input('search');
        $field = $request->input('field');
        $posts = Post::query()
            ->where($field, 'LIKE', "%{$search}%")
            ->get();
        return view('search', compact('posts'));
    }
}
