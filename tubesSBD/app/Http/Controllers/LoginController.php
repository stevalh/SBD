<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email'=>'required|email:dns',
        ],
        [
            'email.required'=>'Email cannot be empty',
            'email.email'=>'Email is not valid'
        ]);
       
        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->intended('/h1');
             
        }
        return back()->with('loginError','User Not Found');
    }

    
}
