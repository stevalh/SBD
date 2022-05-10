<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function send(Request $request)
    {
        $credentials = $request->validate([
            'email'=>'required|email:dns',
        ],
        [
            'email.required'=>'Email cannot be empty',
            'email.email'=>'Email is not valid'
        ]);
    }

    public function isOnline($site ="https://google.com/")
    {
        if(@fopen($site,'r'))
        return true;
        else
            return false;
    }
}
