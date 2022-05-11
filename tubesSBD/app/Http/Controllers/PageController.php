<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function Home()
    {
        return view('index');
    }
    public function AppPage()
    {
        return view('home1');
    }
    public function RegisterPage()
    {
        return view('register');
    }
    
}
