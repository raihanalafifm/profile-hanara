<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function(){
    return view('content.home');
});
Route::get('/about-us', function(){
    return view('content.about.about');
});
Route::get('/contact-us', function(){
    return view('content.about.contact');
});
Route::get('/career', function(){
    return view('content.about.career');
});
Route::get('/career/it-support', function(){
    return view('content.about.job-detail');
});
// Route::get('/career/{job_id}', 'CareerController@showJob')->name('career.job');

Route::get('/instalasi-zimbra', function(){
    return view('content.zimbra.instalasi');
});
Route::get('/maintenance-zimbra', function(){
    return view('content.zimbra.maintenance');
});