<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;

Route::get('/', function () {
    return view('welcome');
});
Route::post('send-email',[EmailController::class,'sendmail']);
Route::view('email-form','email-form');
