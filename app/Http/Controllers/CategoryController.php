<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Gate;
class CategoryController extends Controller
{
    public function create()
    {
        if (!Gate::allows('create-category')){
            return abort(403);
        }
        return view('dashboard.categories.create');
    }

    public function store(CategoryRequest $request)
    {
        Gate::authorize('create-category');

        Category::query()->create([
            'title'=>$request->get('title'),
        ]);
        return redirect()->route('categories.index');
    }

    public function index()
    {
        Gate::authorize('read-category');

        $categories = Category::all();
        return view('dashboard.categories.index',compact('categories'));
    }

    public function edit(Category $category)
    {
        if (!Gate::allows('edit-category',$category)){
            return abort(403);
        }

        return view('dashboard.categories.edit',compact('category'));
    }

    public function update(CategoryRequest $request , Category $category)
    {
        Gate::authorize('update-category',$category);

        $category->title=$request->title;
        $category->save();
        return redirect()->route('categories.index');
    }
    public function destroy(Category $category)
    {
        Gate::authorize('delete-category',$category);

        $category->delete();
        return redirect()->route('categories.index');
    }
}