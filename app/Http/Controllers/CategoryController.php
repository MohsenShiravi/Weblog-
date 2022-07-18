<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use function Symfony\Component\Mime\Header\all;

class CategoryController extends Controller
{
    public function create()
    {
        return view('dashboard.categories.create');
    }

    public function store(CategoryRequest $request)
    {
        Category::query()->create([
            'title'=>$request->get('title'),
        ]);
        return redirect()->route('categories.index');
    }

    public function index()
    {
        $categories = Category::all();
        return view('dashboard.categories.index',compact('categories'));
    }

    public function edit(Category $category)
    {
        return view('dashboard.categories.edit',compact('category'));
    }

    public function update(CategoryRequest $request , Category $category)
    {
        $category->title=$request->title;
        $category->save();
        return redirect()->route('categories.index');
    }
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');
    }
}