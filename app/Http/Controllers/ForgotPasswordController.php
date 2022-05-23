<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    /**
     * Display the form to reset password
     */
    public function reset()
    {
        return view('users.password.email');
        //return view('users.verify');
    }

    /**
     * Display the form to update password through token
     */
    public function getPassword()
    {
        // $token = 'qwe312';
        // return view('users.password.reset', ['token' => $token]);
    }

    /**
     * Display the form that confirms password
     */
    public function confirm()
    {
        return view('users.password.confirm');
    }

}
