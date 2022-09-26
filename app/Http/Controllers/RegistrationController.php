<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(RegistrationRequest $request)
    {
        User::create($request->all());

        // $attributes = $request->all();
        // $attributes['password'] = Hash::make($request->password);



        // old ways

        // $user = User::Where('email', $request->email)->first();
        // if ($user) {
        //     dd('user sudah ada!');
        // }

        // User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password)
        // ]);



        // session()->put('key', 'value');
        // session()->flash('success', 'You are now registered.');

        return redirect('/')->with('success', 'You are now registered.');
    }
}
