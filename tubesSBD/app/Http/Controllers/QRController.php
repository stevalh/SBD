<?php

namespace App\Http\Controllers;
use App\Models\Location;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\User;



class QRController extends Controller
{
    public function index()
    {
        //Check
        $user=User::findorFail(auth()->user()->id);
        $test = $user->test->first();
        if($test)
        {

            if($test->result == "positive")
            {
                return redirect('/app')->with('fail',"Can't use scan (User status : $test->result)");
            }
        }
        return view('Qrcode.qrcode-scan');
    }


   
    public function gallery()
    {
        $all=Location::all();
        return view('Qrcode.QrcodeGallery',['data'=>$all]);
    }

    public static function  generate($id)
    {
        $data=Location::findorFail($id);
        $qrcode=Qrcode::size(400)->generate("http://127.0.0.1:8000/locate/".$data->id);
        return view('Qrcode.Generate',compact('qrcode'));

    }
    public function locate($id)
    {
        $data=Location::findorFail($id);
        $info=[
            'head'=>"Location",
            'btn'=>'Check-in',
        ];
        return view('Qrcode.locationview',compact('data','info'));
    }

}
