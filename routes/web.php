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
Route::get('/troubleshooting-zimbra', function(){
    return view('content.zimbra.troubleshooting');
});
Route::get('/cloud-zimbra', function(){
    return view('content.zimbra.cloud');
});
Route::get('/server-zimbra', function(){
    return view('content.zimbra.server');
});
Route::get('/maintenance-web', function(){
    return view('content.house.maintenance');
});
Route::get('/develop-web', function(){
    return view('content.house.web');
});
Route::get('/web-application', function(){
    return view('content.house.webapp');
});
Route::get('/cctv', function(){
    return view('content.cctv.cctv');
});
Route::get('/motorola', function(){
    return view('content.motorola.motorola');
});
Route::get('/nextcloud', function(){
    return view('content.bisnis.nextcloud');
});
Route::get('/hcis', function(){
    return view('content.bisnis.hcm');
});