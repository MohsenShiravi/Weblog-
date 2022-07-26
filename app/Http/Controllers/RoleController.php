<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Http\Requests\RoleRequest;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function create()
    {
        return view('dashboard.roles.create',['users'=>User::all()]);

    }

    public function store(RoleRequest $request , Role $role)
    {
        $roles=$role->create([
            'title'=>$request->get('title'),
        ]);
        //$roles->users()->attach($request->get('users'));
        return redirect()->route('roles.index');
    }

    public function index()
    {
        $roles = Role::all();
        return view('dashboard.roles.index',compact('roles'));
    }

    public function edit(Role $role)
    {
        return view('dashboard.roles.edit',['role'=>$role,'users'=>User::all()]);
    }

    public function update(Request $request , Role $role)
    {
        $role->update([
            'title'=>$request->get('title'),
        ]);
        $role->users()->sync($request->get('users'));

        return redirect()->route('roles.index');
    }
    public function destroy(Role $role)
    {
        $role->users()->detach();
        $role->delete();
        return redirect()->route('roles.index');
    }
}
