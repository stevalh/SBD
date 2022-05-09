<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormsRequest;

class RegisterController extends Controller
{
    // public function index()
    // {
    //     return view('index'
    //     [

    //     ]);
    // }

    public function store(FormsRequest $request)
    {


        $request->validate(
            [
                'fname' => 'required|alpha',
                'email' => 'required|email:rfc,dns|unique:users|email'
            ],
            [
                'fname.required'=>'Name cannot be empty',
                'fname.alpha'=>'Only alphabet is allowed',
                'email.email:rfc,dns'=>'Email is Not Valid' ,
                'email.required'=>"Email cannot be empty"
            ]
        );
    }
}
