<?php

namespace App\Http\Controllers;
use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users=User::all();
        $roles=Role::all();
        return view ('dashboard.users.index',['users'=>$users,'roles'=>$roles]);
    }
    public function show(User $user)
    {
        $roles=Role::all();
        return view('dashboard.users.show',compact('user','roles'));
    }
    public function store(Request $request ,User $user)
    {
        $user->roles()->sync($request->get('roles'));
        return redirect()->route('users.index');
    }
}
