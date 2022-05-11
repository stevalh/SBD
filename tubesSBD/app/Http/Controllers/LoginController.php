<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $token =$request->get('token');

        $loginrequest=User::where('token',$token);
        Auth::loginUsingId($loginrequest->id);    
    }

    
}
