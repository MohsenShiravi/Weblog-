<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function show()
    {
        return view('dashboard.tags.show',['tags' =>Tag::all(),'posts'=>Post::all()]);
    }
}
