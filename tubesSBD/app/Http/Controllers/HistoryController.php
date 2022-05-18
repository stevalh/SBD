<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HistoryController extends Controller
{
    public function index()
    {
        $user_id=auth()->user()->id;
        $user=User::findorFail($user_id);
        $user_history=$user->histories;
        return view('history',compact('user_history'));
    }
}
