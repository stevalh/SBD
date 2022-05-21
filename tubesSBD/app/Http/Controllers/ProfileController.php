<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('editProfile');
    }

    public function update(Request $request)
    {
        $validate = $request->validate([
            'fname' => 'required|regex:/^[\pL\s\-]+$/u',
           
            'NIK'=>'required|min:8|max:8'
        ],
        [
            'fname.regex'=>'Only alphabet is allowed',
                'NIK.max'=>'NIK contains 8 digits',
                'NIK.min'=>'NIK contains 8 digits',
                
        ]
    );

        $data=DB::table('data')->where('NIK','=',$validate['NIK'])->first();
            if(DB::table('data')->where('NIK','=',$validate['NIK'])->count() >0)
            {
                if($data->fname != $validate['fname'])
                {
                    return redirect('/editprofile')->with('message',"NIK and name doesn't match");
                }
            }
            else
            {
                return redirect('/editprofile')->with('message',"NIK and name doesn't match");
            }
            $user=DB::table('users')->where('id','=',auth()->user()->id)->update([
               'fname'=>$validate['fname'],
               'NIK'=>$validate['NIK'] 
            ]);
    

        return redirect('/editprofile')->with('success', 'Profile has been updated');
    }
}
