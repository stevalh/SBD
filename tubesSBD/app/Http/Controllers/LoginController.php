<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        
        $token =$request->get('token');

        $loginrequest=User::where('token',$token)->first();

        if($loginrequest)
        {
            Auth::login($loginrequest);
            return redirect('/app')->with('success','You are now logged in');    
        }

       
    }

    
}
