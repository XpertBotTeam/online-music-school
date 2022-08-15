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
            'first_name' =>'required |max:15|min:4',
            'last_name' =>'required |max:15|min:4',
            'username' =>['required', 'max:15', 'min:5' , Rule::unique('users', 'username')],
            'email' =>['required' ,Rule::unique('users' ,'email')],
            'password' => 'required|min:4|max:15'
        ]);

        User::create($attributes);
        return redirect('/');

}
}
