<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Permission;
use App\Models\Post;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function create()
    {
        return view('dashboard.roles.create',['permissions'=>Permission::all()]);

    }

    public function store(Request $request , Role $role)
    {
        $roles=$role->create([
            'name'=>$request->get('name'),
        ]);
        $roles->permissions()->attach($request->get('permissions'));
        return redirect()->route('roles.index');
    }

    public function index()
    {
        $roles = Role::all();
        return view('dashboard.roles.index',compact('roles'));
    }

    public function edit(Role $role)
    {
        $permission_ids=$role->GetPermissionIds();

        return view('dashboard.roles.edit',['role'=>$role,'permission_ids'=>$permission_ids,'permissions'=>Permission::all()]);
    }

    public function update(Request $request , Role $role)
    {
        $role->update([
            'name'=>$request->get('name'),
        ]);
        $role->permissions()->sync($request->get('permissions'));

        return redirect()->route('roles.index');
    }
    public function destroy(Role $role)
    {
        $role->permissions()->detach();
        $role->delete();
        return redirect()->route('roles.index');
    }
}
