<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function userview()
    {
        $users=User::all();

        return view('Admin.Tables.user',compact('users'));
    }
}
