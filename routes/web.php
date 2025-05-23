<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');  

// Backend Routes (Protected with Auth)
Route::prefix('backend')->name('backend.')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', function(){
        return view('backend.base.home');
    })->name('dashboard');
    
    // Articles Management
    Route::resource('articles', ArticleController::class);
    Route::patch('articles/{article}/toggle-status', [ArticleController::class, 'toggleStatus'])
        ->name('articles.toggle-status');
    
    // Careers Management
    Route::resource('careers', CareerController::class);
    Route::patch('careers/{career}/toggle-status', [CareerController::class, 'toggleStatus'])
        ->name('careers.toggle-status');
    
    // Users Management
    Route::resource('users', UserController::class);
    Route::patch('users/{user}/toggle-status', [UserController::class, 'toggleStatus'])
        ->name('users.toggle-status');
});

// Frontend Routes (Public)
Route::get('/about-us', function(){
    return view('content.about.about');
})->name('about-us');

Route::get('/contact-us', function(){
    return view('content.about.contact');
})->name('contact-us');

// Career Routes
Route::get('/career', [CareerController::class, 'frontIndex'])->name('career');
Route::get('/career/{career}', [CareerController::class, 'frontShow'])->name('career.detail');

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

require __DIR__.'/auth.php';