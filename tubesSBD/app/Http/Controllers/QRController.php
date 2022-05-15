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
        return view('Qrcode.QrcodeGallery');
    }

    // public function generate($id)
    // {
    //     $data=Location::findorFail($id);
    //     $qr=
    // }

}
