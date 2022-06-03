<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth; /* Add auth dir */
use Illuminate\Support\Facades\Hash; 

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function authenticate(Request $request){
        
        /* VALIDATION & AUTH TYPE III */
        $request->validate([ // Validate the input
            'email'=>'required',
            'password'=>'required'
        ]);

        $user = User::where('email', '=', $request->email)->first();  // Authenticate the user
        if($user){
            if(Hash::check($request->password, $user->password)){
                // Validate user and redirect to index
                $request->session()->put('LoggedUser', $user->id);
                return redirect('/posts');
            }
            else{
                return back()->with('loginError', 'Your Login Failed');
            }
        }
        else{
            return back()->with('loginError', 'No account found');
        }

        /* VALIDATION & AUTH TYPE I */
        // $credentials = $request->validate([
        //     'email' => 'required|email:dns',
        //     'password' => 'required',
        // ]);

        // if(Auth::attempt($credentials)) {
            
        //     $request->session()->regenerate();
        //     return redirect()->intended('/login');
        // }
        // return back()->with('loginError', 'Login failed!');

        
        /* Validation & Authentication Type II */
        // $email = $request->input('email');
        // $password = $request->input('password');

        // if (Auth::attempt(['email' => $email, 'password' => $password])) {
            
        //     $request->session()->regenerate();
        //     return redirect()->intended('/login');
        // }



        /* This command is used to test display all the input (email, password, username) */
        // return $request -> input();

    }
}
