<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Requests\commentRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class CommentController extends Controller
{

    public function index()
    {
        if(Auth::user()->hasRole('superadministrator') or Auth::user()->hasRole('administrator')) {
            $comments=DB::table('comments')->select('comments.*','posts.title','users.name')
                ->leftJoin('users','comments.user_id','=','users.id')
                ->join('posts','posts.id','=','comments.commentable_id')->get();}
        else{
            $comments=DB::table('comments')->select('comments.*','posts.title','users.name')
                ->leftJoin('users','comments.user_id','=','users.id')
                ->join('posts','posts.id','=','comments.commentable_id')
                ->where('posts.user_id','=',Auth::id())->get();
        }
        return view('dashboard.comments.index',compact('comments'));
    }
    public function store(Request $request)
    {
        if(Auth::user()){
            Comment::query()->create([
                'commentable_id'=>$request->get('post_id'),
                'commentable_type'=>Post::class,
                'user_id'=>Auth::id(),
                'content'=>$request->get('content'),
            ]);}
        else{
            Comment::query()->create([
                'commentable_id'=>$request->get('post_id'),
                'commentable_type'=>Post::class,
                'author_name'=>$request->get('author_name'),
                'mobile'=>$request->get('mobile'),
                'email'=>$request->get('email'),
                'content'=>$request->get('content'),
            ]);
        }

        return redirect()->back();
    }

    public function replay(Request $request)
    {
        if(Auth::user()){
            Comment::query()->create([
                'commentable_id'=>$request->get('post_id'),
                'commentable_type'=>Post::class,
                'user_id'=>Auth::id(),
                'content'=>$request->get('content'),
                'parent_id'=>$request->get('parent_id')
            ]);}
        else{
            Comment::query()->create([
                'commentable_id'=>$request->get('post_id'),
                'commentable_type'=>Post::class,
                'author_name'=>$request->get('author_name'),
                'mobile'=>$request->get('mobile'),
                'email'=>$request->get('email'),
                'content'=>$request->get('content'),
                'parent_id'=>$request->get('parent_id')
            ]);
        }

        return redirect()->back();
    }

    public function edit(Comment $comment)
    {
        return view('dashboard.comments.edit',compact('comment'));
    }

    public function update(Request $request , Comment $comment)
    {
        $comment->is_confirm=$request->is_confirm;
        $comment->save();
        return redirect()->route('comments.index');
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('comments.index');
    }
}
