<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PageController;
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
Route::get('/', [PageController::class,'Home'])->middleware('guest');
Route::get('/app', [PageController::class,'AppPage']);
Route::get('/signup', [PageController::class,'RegisterPage'])->middleware('guest');
    
Route::post('/register',[RegisterController::class,'store']);

Route::get('/login',[LoginController::class,'authenticate'])->middleware('guest');

Route::view('/userVerify','Auth.send-email')->name('sendtoken')->middleware('guest');
Route::post('/send',[MailController::class,'send'])->name('send.email')->middleware('guest');



Route::get('/send-email',[MailController::class,'send_email']);
Route::post('/resend/{userEmail}',[MailController::class,'resend']);


//Log out
Route::post('/logout',[LoginController::class,'logout']);

// Route::get('/User',[MailController::class,'send']);


//ADMIN

