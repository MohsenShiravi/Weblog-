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

        $comments=DB::table('comments')->select('comments.*','posts.title','users.name')
            ->leftJoin('users','comments.user_id','=','users.id')
            ->join('posts','posts.id','=','comments.post_id')
            ->where('posts.user_id','=',Auth::id())->get();
        return view('dashboard.comments.index',compact('comments'));
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
