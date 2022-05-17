<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\history;
use Illuminate\Support\Facades\Session;
use App\Models\Location;
use Illuminate\Support\Facades\DB;

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
            redirect('/checkview')->with('success','You already Check-In !!');
        }

       $history = new history();
       $history->user_id=auth()->user()->id;
       $history->location_id=$location_id;
       $history->check_in=now();
       $history->save();
      Session::put('check',$history->id);
      return redirect('/checksuccess')->with('success','Check-in success !!');
    }

    public function checksuccess()
    {
        $history_id=session()->get('check');
        $data=history::findorFail($history_id);
        $location=Location::findorFail($data->location_id);
        $participants=history::where('location_id','=',$location->id)->where('check_out','=',null)->count();
      
        return view('Qrcode.success',compact('data','location','participants'));
    }

    public function checkout()
    {
        
        session()->forget('check');
        return redirect('/app');
    }

    public function checkoutview()
    {

    }
}
