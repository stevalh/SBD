<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $request->validate([
            'name'=> 'required|regex:/^[a-zA-Z]+$/u',
            'email'=>'required|email|unique:users'
        ]);
     
    }
}
