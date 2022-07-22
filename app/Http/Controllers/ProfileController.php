<?php

namespace App\Http\Controllers;

use http\Client\Curl\User;
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
        auth()->user()->update([
            'name'=>$request->get('name'),
            'email'=>$request->get('email')
        ]);
        return redirect()->route('profile.show');
    }
}
