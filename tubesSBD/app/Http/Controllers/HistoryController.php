<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class HistoryController extends Controller
{
    public function index()
    {
        
        $user_id=auth()->user()->id;
        $data=User::with('locations')->get()->find($user_id);
     
        return view('history',compact('data'));

        // "SELECT locations.*, histories.users_id, histories.locations_id, histories.created_at, histories.updated_at, histories.check_out  FROM locations 
        //INNER JOIN histories
        // ON locations.id = histories.locations_id where histories.users_id in ($user_id);
    }
}
