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
       
        if($loginrequest)// else direct ke page jika token salah (fitur expired token blm ada)
        {
            // $request->request->add(['email'=>$loginrequest->email]);

            Auth::login($loginrequest);
            
                
                $request->session()->regenerate();

                return redirect()->intended('/app');
                // return redirect('/app')->with('success','You are now logged in');    
            

        }

       
    }

    
}

// While using his answer, I had to add something directly to the Request Object and used:

// $request->request->add(['variable', 'value']);
// Using this it adds two variables :

// $request[0] = 'variable', $request[1] = 'value'
// If you are a newbie like me and you needed an associate array the correct way to do is

// $request->request->add(['variable' => 'value']);
