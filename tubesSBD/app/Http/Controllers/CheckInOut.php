<?php

namespace App\Http\Controllers;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\history;
use Illuminate\Support\Facades\Session;
use App\Models\Location;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class CheckInOut extends Controller
{
    public function checkin($location_id)
    {
        // if(auth()->user()->certificates->count <=0 || auth()->user()->test->hasil =='negative' ) // bikin relasi user dengan certi sama test
        // {
        //     redirect('/notAllowed');
        // }
        if(Session::has('check'))
        {
           return  redirect('/');
        }

        $location=Location::find($location_id);
        $user =User::find(auth()->user()->id);
        $location->users()->attach($user);

        Session::put('location',$location);
      return redirect('/checksuccess/'.$location_id)->with('success','Check-in success !!');
    }

    public function checksuccess($location_id)
    {
        $data=Location::with('users')->get()->find($location_id);
        return view('Qrcode.success',compact('data'));
    }

    public function checkout($location_id)
    {
        if(Session::has('location'))
        {
            $data=Location::with('users')->get()->find($location_id);
            session()->forget('location');
            foreach($data->users as $user)
            {
                if($user->fname == auth()->user()->fname && $user->pivot->check_out == false)
                {
                   DB::table('histories')->where('locations_id','=',$data->id)->where('users_id','=',$user->id)->update(['check_out'=>true]);
                }
            }
            return redirect('/app')->with('success','Check Out success !!');
        }
        return redirect('/app');
    }

    public function checkoutview($location_id)
    {
        $data=Location::with('users')->get()->find($location_id);
  
        return view('Qrcode.ticket',compact('data'));
    }
}
