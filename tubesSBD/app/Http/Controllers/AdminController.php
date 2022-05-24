<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\City;
use App\Models\Location;
use App\Models\vaccine_type;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Data;
use App\Models\Test;

class AdminController extends Controller
{
    public function index()
    {
        $users=DB::table('users')->count();
        $cities=DB::table('cities')->count();
        $locations=DB::table('locations')->count();
        $tests=DB::table('tests')->count();
        $types=DB::table('vaccine_types')->count();
        return view('Admin.index',compact('users','cities','locations','tests','types'));
    }




     
    public function userview()
    {
        $users=User::all();

        return view('Admin.Tables.user',compact('users'));
    }

    /*
    SELECT * FROM users;
    
    */





    public function cityview()
    {
        $cities=City::all();

        return view('Admin.Tables.city',compact('cities'));
    }
    // SELECT *FROM cities;





    public function certiview()
    {
        $certificates=Certificate::all();

        return view('Admin.Tables.certificate',compact('certificates'));
    }
    /*
    SELECT *FROM certificates;
    */


    public function testview()
    {
        $tests=Test::all();

        return view('Admin.Tables.test',compact('tests'));
    }
    /*
    SELECT *FROM tests;
    */









    public function locationview()
    {
        $locations=Location::all();

        return view('Admin.Tables.location',compact('locations'));
    }
     /*
    SELECT *FROM locations;
    */






    public function typeview()
    {
        $vaccines=vaccine_type::all();

        return view('Admin.Tables.type',compact('vaccines'));

        // SELECT * FROM vaccine_types;
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
            /*
            INSERT INTO cities(name)
                VALUES($validate['name']);
            */

            return redirect('/administrator/city')->with('success','Added new City');

    }

    public function addlocationview()
    {
        $cities=City::orderBy('name')->get();
        return view('Admin.Tables.addlocation',compact('cities'));
    }


    

    public function addlocation(Request $request)
    {
      
        $data= $request->all();
              

            $location=new Location();
            $location->location_name =$data['name'];
            $location->address =$data['address'];
            $location->city_id =$data['city'];
            $location->save();

            return redirect('/administrator/location')->with('success','Added new location');
            // INSERT INTO locations(location_name,address,city_id)
            //      VALUES($data['name'],$data['address'],$data['city']);

    }
    public function addtypeview()
    {
        
        return view('Admin.Tables.addvaccine');
    }

    public function addvaccine(Request $request)
    {
      
        $validate= $request->validate(
            [
                'name'=>'required|unique:vaccine_types'
            ],
            [
                
                'name.unique'=>'Vaccine has already been registered in our database'
            ]     
            );
      

          

            $vaccine=new vaccine_type();
            $vaccine->name =$validate['name'];
            $vaccine->save();

            // INSERT INTO vaccine_types(name)
            //     VALUES($validate['name']);

            return redirect('/administrator/type')->with('success','Added new Types of Vaccine');

    }



    public function addcertiview()
    {
        $vaccines=vaccine_type::all();
        return view('Admin.Tables.addcerti',compact('vaccines'));
    }



    
    public function addcerti(Request $request)
    {
      
        $validate= $request->validate(
            [
                'name'=>'required|regex:/^[\pL\s\-]+$/u',
                'NIK'=>'required|max:8|min:8',
                'email'=>'required|email:dns',
                'vaccine'=>'required',
                
            ],
            [
                'name.regex'=>'Only alphabet is allowed',
                'NIK.max'=>'NIK contains 8 digits',
                'NIK.min'=>'NIK contains 8 digits',
                'email.email'=>'Email Format invalid'
            ]     
            );
            
            //Memeriksa apakah data yg dimasukkan terdapat dalam table 'data' 
        //Jika tidak maka certi tidak bs ditambah

        //Query 
        /*
         SELECT * FROM data WHERE NIK = $validate['NIK'];
         SELECT COUNT(*) FROM data WHERE NIK =$validate['NIK];
         2c
        */
            $data=DB::table('data')->where('NIK','=',$validate['NIK'])->first();
            if(DB::table('data')->where('NIK','=',$validate['NIK'])->count() >0)
            {
                if($data->fname != $validate['name'])
                {
                    return redirect('/administrator/addcertificateview')->with('check',"NIK and name doesn't match");
                }
            }
            else
            {
                return redirect('/administrator/addcertificateview')->with('check',"NIK and name doesn't match");
            }

            $user=DB::table('users')->where('email','=',$validate['email'])->first();

            $certificates=new Certificate();
            $certificates->admin_id =auth()->user()->id;
            $certificates->owner_name=$validate['name'];
            $certificates->owner_NIK=$validate['NIK'];
            $certificates->user_id=$user->id;
            $certificates->vaccine_id=$validate['vaccine'];
            $certificates->save();

            return redirect('/administrator/certi')->with('success','Certificate has been sent successfully');
            /* 
                 INSERT INTO certificates(admin_id,owner_name,owner_NIK,user_id,vaccine_id)
                 VALUES(auth()->user()->id,$validate['name'],$validate['NIK'],$user->id,$validate['vaccine']);
            */
    }



    public function addtestview()
    {
        
        return view('Admin.Tables.addtest');
    }

    //3d
    public function addtest(Request $request)
    {
        $validate= $request->validate(
            [
                'name'=>'required|regex:/^[\pL\s\-]+$/u',
                'NIK'=>'required|max:8|min:8',
                'email'=>'required|email:dns',
                'result'=>'required',
                
            ],
            [
                'name.regex'=>'Only alphabet is allowed',
                'NIK.max'=>'NIK contains 8 digits',
                'NIK.min'=>'NIK contains 8 digits',
                'email.email'=>'Email Format invalid'
            ]     
            );
            //Memeriksa apakah data yg dimasukkan terdapat dalam table 'data' 
        //Jika tidak maka tests tidak bs ditambah

        //Query 
        /*
         SELECT * FROM data WHERE NIK = $validate['NIK'];
         SELECT COUNT(*) FROM data WHERE NIK =$validate['NIK];
        */
            $data=DB::table('data')->where('NIK','=',$validate['NIK'])->first();
            if(DB::table('data')->where('NIK','=',$validate['NIK'])->count() >0)
            {
                if($data->fname != $validate['name'])
                {
                    return redirect('/administrator/addtestview')->with('check',"NIK and name doesn't match");
                }
            }
            else
            {
                return redirect('/administrator/addtestview')->with('check',"NIK and name doesn't match");
            }

            $user=DB::table('users')->where('email','=',$validate['email'])->first();

            $test=new Test();
            $test->admin_id =auth()->user()->id;
            $test->patient_name=$validate['name'];
            $test->patient_NIK=$validate['NIK'];
            $test->patient_id=$user->id;
            $test->result=$validate['result'];
            $test->save();
            
            /*
            SELECT * FROM users WHERE email = $validate['email']
                LIMIT 1;

            INSERT INTO tests(admin_id,patient_name,patient_NIK,patient_id,result)
                VALUES(auth()->user()->id,$validate['name'],$validate['NIK'],$user->id,$validate['result']);

            */
            return redirect('/administrator/test')->with('success','Test Result has been sent successfully');

    }
    //3c
    public function deletetest(Request $request)
    {
        $data=$request->all();

        DB::table('tests')->where('id','=',$data['id'])->delete();
        return redirect('/administrator/test')->with('del','Deleted Successfuly');
    }
    //DELETE FROM tests WHERE id =$request->id;
}
