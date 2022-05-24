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

    public function update(Request $request) //1(c)
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
        //Memeriksa apakah data yg dimasukkan terdapat dalam table 'data' 
        //Jika tidak maka profile tidak bs diupdate

        //Query 
        /*
         SELECT * FROM data WHERE (NIK = $validate['NIK'] ) ;
         SELECT COUNT(*) FROM data WHERE NIK =$validate['NIK];
        */
        $data=DB::table('data')->where('NIK','=',$validate['NIK']);
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
            /*
            UPDATE users SET fname =$validate['fname'],NIK = $validate['NIK] WHERE id = auth()->user()->id;
            
            */

        return redirect('/editprofile')->with('success', 'Profile has been updated');
    }
}
