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
            'name'=> 'required|alpha',
            'email'=>'required|email|unique:users'
        ]);
        #Note: Make An Error Message (Pending)
        dd('Registration Success');
    }
}
