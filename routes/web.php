<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');  

Route::get('/about-us', function(){
    return view('content.about.about');
})->name('about-us');

Route::get('/contact-us', function(){
    return view('content.about.contact');
})->name('contact-us');

Route::get('/career', function(){
    return view('content.about.career');
})->name('career');

Route::get('/career/it-support', function(){
    return view('content.about.job-detail');
})->name('career.it-support');

Route::get('/instalasi-zimbra', function(){
    return view('content.zimbra.instalasi');
})->name('instalasi-zimbra');

Route::get('/maintenance-zimbra', function(){
    return view('content.zimbra.maintenance');
})->name('maintenance-zimbra');

Route::get('/troubleshooting-zimbra', function(){
    return view('content.zimbra.troubleshooting');
})->name('troubleshooting-zimbra');

Route::get('/cloud-zimbra', function(){
    return view('content.zimbra.cloud');
})->name('cloud-zimbra');

Route::get('/server-zimbra', function(){
    return view('content.zimbra.server');
})->name('server-zimbra');

Route::get('/maintenance-web', function(){
    return view('content.house.maintenance');
})->name('maintenance-web');

Route::get('/develop-web', function(){
    return view('content.house.web');
})->name('develop-web');

Route::get('/web-application', function(){
    return view('content.house.webapp');
})->name('web-application');

Route::get('/cctv', function(){
    return view('content.cctv.cctv');
})->name('cctv');

Route::get('/motorola', function(){
    return view('content.motorola.motorola');
})->name('motorola');

Route::get('/nextcloud', function(){
    return view('content.bisnis.nextcloud');
})->name('nextcloud');

Route::get('/hcis', function(){
    return view('content.bisnis.hcm');
})->name('hcis');