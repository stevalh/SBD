<?php

namespace App\Http\Controllers;
use App\Models\Location;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;



class QRController extends Controller
{
    public function index()
    {
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
        return view('Qrcode.locationview',compact('data'));
    }

}
