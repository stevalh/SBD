<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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
        $token=md5(rand());
        DB::table('users')->where('email', $credentials['email'])->update(['token'=>$token]);
        
        if($this->isOnline())
        {

            $mail_data =[
                'recipient'=> $request->email,
                'fromEmail'=>'miminwyz@gmail.com',
                'subject'=>'User Login',
                'body'=>"<h2>User Token</h2>
                <h5> Login with the given link below</h5>
                <br><br>
                <a href='http://localhost/login?vkey=$token'>Login Now</a>',"
            ];
            \Mail::send('Auth.email-template',$mail_data,function($message) use($mail_data)
            {
                $message->to($mail_data['recipient'])->from($mail_data['fromEmail'])->subject($mail_data['subject']);
            });
            return "Email Sent";
         
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
}
