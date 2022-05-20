<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\City;
use App\Models\Location;
use App\Models\vaccine_type;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{
    public function index()
    {
        $users=DB::table('users')->count();
        $cities=DB::table('cities')->count();
        $locations=DB::table('locations')->count();
        $tests=DB::table('tests')->count();
        return view('Admin.index',compact('users','cities','locations','tests'));
    }
    public function userview()
    {
        $users=User::all();

        return view('Admin.Tables.user',compact('users'));
    }
    public function cityview()
    {
        $cities=City::all();

        return view('Admin.Tables.city',compact('cities'));
    }
    public function locationview()
    {
        $locations=Location::all();

        return view('Admin.Tables.location',compact('locations'));
    }
    public function typeview()
    {
        $vaccines=vaccine_type::all();

        return view('Admin.Tables.type',compact('vaccines'));
    }

    public function addcityview()
    {
        return view('Admin.Tables.addcity');
    }

    public function addcity(Request $request)
    {
      
        $validate= $request->validate(
            [
                'name'=>'required|unique:cities|regex:/^[\pL\s\-]+$/u'
            ],
            [
                'name.regex' =>'Only alphabet is allowed',
                'name.unique'=>'City has already been registered in our database'
            ]     
            );
      

          

            $city=new City();
            $city->name =$validate['name'];
            $city->save();

            return redirect('/administrator/city')->with('success','Added new City');

    }
}
