<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Category;

use App\Models\Image;
use App\Models\Post;

use App\Models\Role;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

public function create()
{
    $categories = Category::all();
    return view('dashboard.posts.create',['categories'=>$categories,'tags'=>Tag::all()]);
}

    public function store(PostRequest $request)
    {
        $posts=Post::query()->create([
            'title'=>$request->get('title'),
            'short_content'=>$request->get('short_content'),
            'content'=>$request->get('content'),
            'category_id'=>$request->get('category_id'),
            'is_confirm'=>$request->get('is_confirm'),
            'user_id'=>Auth::id(),
            'status'=>$request->get('status'),
        ]);
        if ($request['file']){
            $file = $request['file'];
            $img = $this->ImageUpload($file , 'files/');
        }
        else {
            $img = 'files/default.jpg';
        }
        $post=Post::query()->find($posts->id);
        $image=new Image();
        $image->file=$img;
        $image->imageable_id=$post->id;
        $image->imageable_type=Post::class;
        $image->save();

        $posts->tags()->attach($request->get('tags'));
        return redirect()->route('posts.index');
    }

    public function index()
    {

        if(Auth::user()->hasRole('superadministrator') or Auth::user()->hasRole('administrator'))
        {
            $posts=Post::query()->with('category')->get();
        }
        else
        {
            $posts=Post::query()->where('user_id','=',Auth::id())->with('category')->get();
        }

        return view('dashboard.posts.index',compact('posts'));
    }

    public function edit(Post $post)
    {
        $tags_ids=$post->GetTagIds();
        return view('dashboard.posts.edit',
            ['post'=>$post,
                'categories'=>Category::all(),
                'tags'=>Tag::all(),
                'tags_ids'=>$tags_ids
            ]);
    }
    public function DetailsPost(Post $post)
    {
        return view('dashboard.posts.detailspost',['post'=>$post]);
    }

    public function update(PostRequest $request , Post $post)
    {
        $post->update([
            'title'=>$request->get('title'),
            'short_content'=>$request->get('short_content'),
            'content'=>$request->get('content'),
            'category_id'=>$request->get('category_id'),
            'is_confirm'=>$request->get('is_confirm'),
            'status'=>$request->get('status'),
        ]);
        $post->tags()->sync($request->get('tags'));
        return redirect()->route('posts.index');
    }

    public function confirm(Request $request , Post $post)
    {
        $post->update([
            'is_confirm' => $request->get('is_confirm')]);

        return redirect()->route('posts.index');
    }
    public function destroy(Post $post,Image $image)
    {
        $post->tags()->detach();
        $image->delete();
        $post->delete();
        return redirect()->route('posts.index');
    }


}


