<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => ['required', 'string', 'min:3', 'max:100'],
            'email' => ['email', 'unique:users', 'email'],
            'password' => ['required', 'min:4']
        ]);

        // $user = User::Where('email', $request->email)->first();
        // if ($user) {
        //     dd('user sudah ada!');
        // }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        // session()->put('key', 'value');
        session()->flash('success', 'You are now registered.');
        return redirect('/');
    }
}
