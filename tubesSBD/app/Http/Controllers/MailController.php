<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $user=DB::table('users')->where('email', $credentials['email'])->first();

        if(!$user)
        {
            return redirect('/')->with('loginError', 'User Not Found');
        }

        $token=md5(rand());
        DB::table('users')->where('email', $credentials['email'])->update(['token'=>$token]);

        $usertoken= DB::table('users')->where('email', $credentials['email'])->first()->token;
        
        if($this->isOnline())
        {
            if($usertoken === $token )
            {

                $mail_data =[
                    'recipient'=> $request->email,
                    'fromEmail'=>'miminwyz@gmail.com',
                    'subject'=>'User Login',
                    'body'=>"<h2>User Token</h2>
                    <h5> Login with the given link below</h5>
                    <br><br>
                    <a href='http://127.0.0.1:8000/login?token=$token'>Login Now</a>',"
                ];
                \Mail::send('Auth.email-template',$mail_data,function($message) use($mail_data)
                {
                    $message->to($mail_data['recipient'])->from($mail_data['fromEmail'])->subject($mail_data['subject']);
                });
               //return "Email Sent";
                
                return redirect('/send-email')->with('email', $request->email); 
            }
         
        }else
        return redirect()->back()->withInput()->with('error','Check your Connection');

    }

    public function isOnline($site ="https://google.com/")
    {
        if(@fopen($site,'r'))
        return true;
        else
            return false;
    }

    public function resend($userEmail)
    {
        $user=DB::table('users')->where('email', $userEmail)->first();

        if(!$user)
        {
            return redirect('/')->with('loginError', 'User Not Found');
        }

        $token=md5(rand());
        DB::table('users')->where('email', $userEmail)->update(['token'=>$token]);
        $usertoken= DB::table('users')->where('email', $userEmail)->first()->token;
        
        if($this->isOnline())
        {
            if($usertoken == $token )
            {
                    
                $mail_data =[
                    'recipient'=> $userEmail,
                    'fromEmail'=>'miminwyz@gmail.com',
                    'subject'=>'User Login',
                    'body'=>"<h2>User Token</h2>
                    <h5> Login with the given link below</h5>
                    <br><br>
                    <a href='http://127.0.0.1:8000/login?token=$token'>Login Now</a>',"
                ];
                \Mail::send('Auth.email-template',$mail_data,function($message) use($mail_data)
                {
                    $message->to($mail_data['recipient'])->from($mail_data['fromEmail'])->subject($mail_data['subject']);
                });
                // return "Email Sent";// ganti jadi error
                
                return redirect('/send-email')->with('email', $userEmail); // klo uda buat page error ini dihapus aja
            }
         
        }else
        return redirect()->back()->withInput()->with('error','Check your Connection');

    }

    public function send_email()
    {
        return view('Auth.send-email');
    }
   
}
