<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    //
    public function create(){
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' =>'required |max:15|min:4',
            'email' =>['required' ,Rule::unique('users' ,'email')],
            'password' => 'required|min:4|max:15'
        ]);

        User::create($attributes);
        return redirect('/');

}
}
