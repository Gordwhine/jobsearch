<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;

class UsersController extends Controller
{
    /**
     * Display the register form
     */
    public function register()
    {
        return view('users.register');
    }

    /**
     * Display the register form
     */
    public function store(CreateUserRequest $request)
    {
       $passwordencryted = bcrypt($request['password']);
       $user = User::create([
           'name' => $request['username'],
           'email' => $request['email'],
           'password' => $passwordencryted
       ]);
       // Login
       auth()->login($user);

       return $user 
        ?  redirect('/')->with('success', 'User created and logged in!')
        : redirect()->route('register')->with('error', 'Error Occured while creating the user, Please Retry!!');
    }

     /**
     * Display the login form
     */
    public function login()
    {
        return view('users.login');
    }

    /**
     * Login the user
     */
    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields))
        {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now login');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])
                    ->onlyInput('email');
    }

     /**
     * Log user out of the system
     */
    public function logout(Request $request)
    {
        // This removes the authentication info from the user
        auth()->logout();
        // Invalidate the user session
        $request->session()->invalidate();
        // Regenerate csrf token
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');
    }
}
