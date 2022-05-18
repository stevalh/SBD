<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HistoryController extends Controller
{
    public function index()
    {
        $user_id=auth()->user()->id;
        $data=User::with('locations')->get()->find($user_id);
        return view('history',compact('data'));
    }
}
