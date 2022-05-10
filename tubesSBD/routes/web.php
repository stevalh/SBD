<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MailController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/h1', function () {
    return view('home1');
});

Route::get('/signup', function () {
    return view('register');
});

Route::post('/register',[RegisterController::class,'store']);

Route::post('/login',[LoginController::class,'authenticate']);

Route::view('/userVerify','Auth.send-email')->name('sendtoken');
Route::post('/send',[MailController::class,'send'])->name('send.email');
