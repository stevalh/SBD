<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\QRController;
use App\Http\Controllers\CheckInOut;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\CovidTestController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Page Controller
Route::get('/', [PageController::class,'Home'])->name('home')->middleware('guest');
Route::get('/app', [PageController::class,'AppPage'])->middleware('auth');
Route::get('/signup', [PageController::class,'RegisterPage'])->middleware('guest');

Route::post('/register',[RegisterController::class,'store']);

Route::get('/login',[LoginController::class,'authenticate'])->middleware('guest');

Route::view('/userVerify','Auth.send-email')->name('sendtoken')->middleware('guest');
Route::post('/send',[MailController::class,'send'])->name('send.email')->middleware('guest');

Route::get('/send-email',[MailController::class,'send_email'])->middleware('guest');
Route::post('/resend/{userEmail}',[MailController::class,'resend'])->middleware('guest');

Route::get('/profile', function () {
    return view('profile');
});

//Log out
Route::post('/logout',[LoginController::class,'logout'])->middleware('auth');

// Route::get('/User',[MailController::class,'send']);

//QR Code

Route::get('/scan',[QRController::class,'index'])->middleware('auth');
Route::get('/gallery',[QRController::class,'gallery']);
Route::get('/generate/{id}',[QRController::class,'generate'])->name('generate');
Route::get('/locate/{id}',[QRController::class,'locate'])->name('locate')->middleware('auth');

//Check in
Route::get('/checkIn/{location_id}',[CheckInOut::class,'checkin'])->middleware('auth');
Route::get('/checksuccess/{location_id}',[CheckInout::class,'checksuccess'])->middleware('auth');
//Checkout
Route::get('/checkout/{location_id}',[Checkinout::class,'checkout'])->middleware('auth');
Route::get('/checkview/{location_id}',[Checkinout::class,'checkoutview'])->middleware('auth');


//Admin
Route::group([
    'prefix'=>config('admin.prefix'),
    'namespace'=>'App\\Http\\Controllers',
],function () {

    Route::get('login','LoginAdminController@formLogin')->name('admin.login');
    Route::post('login','LoginAdminController@login');

    Route::middleware(['auth:admin'])->group(function () {
        Route::post('logout','LoginAdminController@logout')->name('admin.logout');
        Route::get('/','AdminController@index')->name('dashboard');
        Route::get('/user','AdminController@userview')->name('user');
        Route::get('/city','AdminController@cityview')->name('city');
        Route::get('/location','AdminController@locationview')->name('location');
        Route::get('/type','AdminController@typeview')->name('vaccinetype');
        Route::get('/certi','AdminController@certiview')->name('certi');
        Route::get('/addcityview','AdminController@addcityview')->name('addcityview');
        Route::post('/addcity','AdminController@addcity')->name('addcity');
        Route::get('/addlocationview','AdminController@addlocationview')->name('addlocationview');
        Route::post('/addlocation','AdminController@addlocation')->name('addlocation');
        Route::get('/addtypeview','AdminController@addtypeview')->name('type');
        Route::post('/addvaccine','AdminController@addvaccine')->name('addvaccine');

        Route::get('/addcertificateview','AdminController@addcertiview')->name('addcertiview');
        Route::post('/addcertificate','AdminController@addcerti')->name('addcertificate');
        
        Route::view('/admin','Admin.data-admin')->name('admin');
    });
});

//  History
Route::get('/history',[HistoryController::class,'index']);

// Certificate
Route::get('/certificate', [CertificateController::class, 'index']);


//Test
Route::view('/testadmin','Admin.index');
 

// Vaccine
Route::get('/covid19-test', [CertificateController::class, 'index']);
