<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    //

    public function create(){
        return view('sessions.create');
    }

    public function store(){
        $attributes = request()->validate([
            'email' => 'required|exists:users,email',
            'password' =>'required'
        ]);

        //auth succeed
        if (auth()->attempt($attributes)) {
            session()->regenerate();
            return redirect('/')->with('success', 'Welcome back!');
        }

        // auth failed
        throw ValidationException::withMessages([
            'email' =>'Your provided credentials could not be verified'
        ]);

    }
    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', 'Goodbye');
    }
}
