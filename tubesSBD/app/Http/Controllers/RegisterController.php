<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    // public function index()
    // {
    //     return view('index'
    //     [

    //     ]);
    // }

    public function store(Request $request)
    {


      $validatedData = $request->validate(
            [
                
                'fname' => 'required|alpha',
                'email' => 'required|email:rfc,dns|unique:users|email'
            ],
            [
                'fname.required'=>'Name cannot be empty',
                'fname.alpha'=>'Only alphabet is allowed',
                'email.required'=>"Email cannot be empty",
                'email.email'=>'Email is Not Valid',
                'email.unique'=>"This email address is registered"
            ]
        );
  
      
        User::create($validatedData);
        
        return redirect('/')->with('success', 'Registration successfull ! Please Login'); 
        // $request->session()->flash('success','Registration successfull ! Please Login');
        // return redirect('/');
       
    }
}
