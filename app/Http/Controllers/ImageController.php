<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use App\Models\Post;
use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
{

    public function create()
    {
        $posts = Post::all();
        $images = Image::all();
        return view('dashboard.images.create',['images'=>$images,'posts'=>$posts]);
    }

    public function store(Request $request)
    {
        $savefolder='public/images';
        if ($request->hasFile('file')){
            $complatefilename=$request->file('file')->getClientOriginalName();
            $filename=pathinfo($complatefilename,PATHINFO_FILENAME);
            $extention=$request->file('file')->getClientOriginalExtension();
            $compPic=str_replace(' ','_',$filename).'_'.time().'.'.$extention;
            $path=$request->file('file')->storeAs($savefolder,$compPic);

        }
        Image::query()->create([
            'file'=>$path,
            'imageable_type'=>$request->get('imageable_type'),
            'imageable_id'=>$request->get('imageable_id'),
        ]);
        //$posts->tags()->attach($request->get('tags'));
        return redirect()->route('images.index');
    }

    public function index()
    {
        $images = Image::all();
        return view ('dashboard.images.index',compact('images'));
    }

    public function edit()
    {
        $images = Image::all();
        return view('dashboard.images.edit',['images'=>$images]);
    }

    public function update(ImageRequest $request , Image $image)
    {
        $image->update([
            'url'=>$request->get('url'),
            'imageable_type'=>$request->get('imageable_type'),
            'imageable_id'=>$request->get('imageable_id'),
        ]);
        return redirect()->route('dashboard.images.index');
    }
    public function destroy(Image $image)
    {

        $image->delete();
        return redirect()->route('dashboard.images.index');
    }
}


