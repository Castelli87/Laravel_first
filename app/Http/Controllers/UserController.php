<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //Show the form 
    public function create()
    {
        return view('users.register');
    }

    //create new user
    public function store(Request $request)
    {

        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            // use the Rule::unique  so the email should be unique into the users table and into the email field
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        //Hash the Password // bycrypt the form 
        $formFields['password'] = bcrypt($formFields['password']);

        //After the validation of everyfield and bcrypt the password 
        //Create the User 
        $user =  User::create($formFields);

        //After create the user go straight to the login 
        //Login
        auth()->login(($user));

        //After the successfull login go straight to the homepage and show a msg
        return redirect('/')->with('message', 'User Created and Logged in ');
    }
    //Logout
    public function logout(Request $request)
    {

        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');
    }

    //Show the Login Page 
    public function login()
    {
        return view('users.login');
    }

    //Athuntiucate the user in the login 
    public function authenticate(Request $request)
    {

        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return redirect('/')->with('message', 'You are Logged In');
        }
        //if fail return back to the login page with the errors
        
        return back()->withErrors(['email'=>'Invalid Credentials'])->onlyInput('email');
    }
}