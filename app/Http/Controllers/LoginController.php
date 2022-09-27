<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        // $credentials = $request->only('email', 'password');

        if (Auth::attempt($attributes)){
            return redirect(RouteServiceProvider::HOME)->with('success', 'You are now Logged in');
        }

        // $user = User::whereEmail($request->email)->first();
        // if ($user) {
        //     if (Hash::check($request->password, $user->password)) {
        //         Auth::login($user);
        //         return redirect('dashboard')->with('success', 'You are now Logged in');
        //     }
        // }

        throw ValidationException::withMessages([
            'email' => 'Your email is wrong!'
        ]);
    }

}
