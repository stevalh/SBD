<?php

namespace App\Http\Controllers;
use Illuminate\Support\Carbon;
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
       $history->save();
      Session::put('check',$history->id);
      return redirect('/checksuccess')->with('success','Check-in success !!');
    }

    public function checksuccess()
    {
        $history_id=session()->get('check');
       
        $data=history::findorFail($history_id);
        $participants=DB::table("histories")->where('location_id','=',$data->location->id)->where('check_out','=',false)->count();
  
        return view('Qrcode.success',compact('data','participants'));
    }

    public function checkout()
    {
        if(Session::has('check'))
        {
            $history_id=session()->get('check');
            $activeplace=history::findorFail($history_id);
            $activeplace->check_out=true; 
            $activeplace->save();
            session()->forget('check');
        }
        return redirect('/app');
    }

    public function checkoutview()
    {

    }
}
