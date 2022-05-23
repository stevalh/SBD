<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('certificate');
    }

    // public function certiyo() jangan dihapus
    // {
    //     $user=User::findorfail(auth()->user()->id);
    //     return view('',compact($user));

    // }
        
    
}
