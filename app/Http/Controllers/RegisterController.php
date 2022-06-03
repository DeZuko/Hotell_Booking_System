<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index');
    }

    public function store(Request $request) {

        $validatedData = $this -> validate($request, [
            'name'=>['required','min:3','max:255'],
            'email'=>'required|email:dns|unique:users',
            'password'=>'required'
       ]);

        /* Encrypt password */
        // $validatedData['password']=bcrypt($validatedData['password']);
        $validatedData['password']=Hash::make($validatedData['password']);

        User::create($validatedData);
       
        /* Redirect and bring flash message */ 
        return redirect('/login')->with('success','Registration successful! Please login');
        // $request->session()->flash('success','Registration successful! Please login');

        /* This command is used to display all the request (email, password, username) */
        // return request()->all();
    }
}
