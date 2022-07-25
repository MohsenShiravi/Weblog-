<?php

namespace App\Http\Controllers;

use App\Models\Image;

use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        return view('dashboard.profile.show',['user'=>auth()->user()]);
    }

    public function edit()
    {
        return view('dashboard.profile.edit',['user'=>auth()->user()]);
    }

    public function update(Request $request)
    {

        $user = auth()->user();

        $user->update([
            'name' => $request->get('name', $user->name),
            'email' => $request->get('email', $user->email)
            ]);


            $file = $request['file'];

            $img = $this->ImageUpload($file , 'files/');
            Image::query()
            ->where('imageable_id',$user->id)
            ->where('imageable_type',User::class)
            ->update(['file'=>$img]);
        return redirect()->route('profile.show');
    }
}
