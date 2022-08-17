<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    //

    public function create(){
        return view('sessions.create');
    }

    public function destroy(){
        auth()->logout();
        return redirect('/')->with('success', 'Goodbye');
    }

    public function store(){
        $attributes = request()->validate([
            'email' => 'required|exists:users,email',
            'password' =>'required'
        ]);


        //auth succeed
        // if(auth()->attempt($attributes)){
        if (auth()->attempt($attributes)) {
            ddd('w err');
            return redirect('/')->with('success', 'Welcome back!');
        }
        //     return redirect('/')->with('success' , 'Welcome back!');
        // }
        // auth failed
        // return back()->withErrors(['email' => 'Your provided credentials could not be verified !']);
        throw ValidationException::withMessages([
            'email' =>'Your provided credentials could not be verified'
        ]);

    }
}
