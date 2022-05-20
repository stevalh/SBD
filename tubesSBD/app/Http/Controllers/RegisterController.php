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
                
                'fname' => 'required|regex:/^[\pL\s\-]+$/u',
                'email' => 'required|email:rfc,dns|unique:users|email',
                // 'NIK'=>'required|min:8|max:8'
            ],
            [
                'fname.required'=>'Name cannot be empty',
                'fname.regex'=>'Only alphabet is allowed',
                'email.required'=>"Email cannot be empty",
                'email.email'=>'Email is Not Valid',
                'email.unique'=>"This email address is registered",
                // 'NIK.min:8'=>'NIK invalid',
                // 'NIK.max:8'=>'NIK invalid'
            ]
        );
  
      
        User::create($validatedData);
        
        return redirect('/')->with('success', 'Registration successfull ! Please Login'); 
        // $request->session()->flash('success','Registration successfull ! Please Login');
        // return redirect('/');
       
    }
}
