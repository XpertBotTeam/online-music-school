<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function create(){
        // $attributes = request()->validate([
        //     'name' =>'required',
        //     'email' =>'required',
        //     'password' => 'required'
        // ]);

        // User::create($attributes);
            return view('register.create');
    }
}
