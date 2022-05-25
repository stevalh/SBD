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
   
        if(Session::has('check'))
        {
           return  redirect('/');
        }

        $location=Location::find($location_id);
        $user =User::find(auth()->user()->id);
        $location->users()->attach($user);

        /*
        SELECT * FROM locations WHERE id = $location_id;
        SELECT * FROM users WHERE id = auth()->user()->id;
        INSERT INTO histories (locations_id,users_id)
            VALUES($location,$user);       
        */

        Session::put('location',$location);
      return redirect('/checksuccess/'.$location_id)->with('success','Check-in success !!');
    }

    public function checksuccess($location_id)
    {
        //SESUAI dengan pivot table yang dibentuk(histories) dimana relasi antara locations
        //dan users adalah many to many
        $data=Location::with('users')->get()->find($location_id);
        return view('Qrcode.success',compact('data'));
        // "SELECT users.*, histories.users_id, histories.locations_id, histories.created_at, histories.updated_at, histories.check_out  FROM users 
        //INNER JOIN histories
        // ON users.id = histories.users_id where histories.locations_id in ($location_id);
    }

    public function checkout($location_id)
    {
        if(Session::has('location'))
        {
            //SESUAI dengan pivot table yang dibentuk(histories) dimana relasi antara locations
            //dan users adalah many to many
            $data=Location::with('users')->get()->find($location_id);
            
            // "SELECT users.*, histories.users_id, histories.locations_id, histories.created_at, histories.updated_at, histories.check_out  FROM users 
            //INNER JOIN histories
            // ON users.id = histories.users_id where histories.locations_id in ($location_id);
            session()->forget('location');
            foreach($data->users as $user)
            {
                
                if($user->id == auth()->user()->id && $user->pivot->check_out == false)
                {
                   DB::table('histories')->where('locations_id','=',$data->id)->where('users_id','=',$user->id)->update(['check_out'=>true]);
                   /*
                  
                    UPDATE histories SET check_out = true 
                        WHERE (locations_id = $data->id AND users_id = $user->id AND check_out = false);
                   */
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
        /*
            SELECT * FROM locations WHERE id = $location_id;
            SELECT * FROM users;
        */
    }
}
