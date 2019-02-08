<?php

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
    return view('pages.home');
});

Route::get('test', function() {
    return view('inc.joinus');
});

Route::get('packages', function() {
    return view('pages.packages');
});

Route::get('about', function() {
    return view('pages.about');
});

Route::get('gallery', function(){
    return view('pages.gallery');
});

Route::post('send/email', 'MailController@sendemail');