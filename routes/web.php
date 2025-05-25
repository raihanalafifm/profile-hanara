<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ZimbraController;
use App\Http\Controllers\SoftwareHouseController;
use App\Http\Controllers\BusinessSolutionController;
use App\Http\Controllers\ServiceController;

// Homepage
Route::get('/', [HomeController::class, 'index'])->name('home');

// Redirect dashboard (untuk backward compatibility)
Route::redirect('/dashboard', '/')->name('dashboard');

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

// About Pages
Route::get('/tentang-kami', [PageController::class, 'about'])->name('about-us');
Route::get('/hubungi-kami', [PageController::class, 'contact'])->name('contact-us');

// Career Routes
Route::get('/karir', [CareerController::class, 'frontIndex'])->name('career');
Route::get('/karir/{career:slug}', [CareerController::class, 'frontShow'])->name('career.detail');

// Redirects dari URL lama (untuk SEO)
Route::redirect('/about-us', '/tentang-kami', 301);
Route::redirect('/contact-us', '/hubungi-kami', 301);
Route::redirect('/career', '/karir', 301);

// Zimbra Routes dengan Controller
Route::prefix('zimbra')->group(function () {
    Route::get('/instalasi', [ZimbraController::class, 'instalasi'])->name('instalasi-zimbra');
    Route::get('/maintenance', [ZimbraController::class, 'maintenance'])->name('maintenance-zimbra');
    Route::get('/troubleshooting', [ZimbraController::class, 'troubleshooting'])->name('troubleshooting-zimbra');
    Route::get('/cloud', [ZimbraController::class, 'cloud'])->name('cloud-zimbra');
    Route::get('/server', [ZimbraController::class, 'server'])->name('server-zimbra');
});

// Software House Routes
Route::prefix('software-house')->group(function () {
    Route::get('/web-development', [SoftwareHouseController::class, 'webDevelopment'])->name('develop-web');
    Route::get('/web-application', [SoftwareHouseController::class, 'webApplication'])->name('web-application');
    Route::get('/maintenance', [SoftwareHouseController::class, 'maintenance'])->name('maintenance-web');
});

// Other Services
Route::get('/cctv', [ServiceController::class, 'cctv'])->name('cctv');
Route::get('/motorola', [ServiceController::class, 'motorola'])->name('motorola');

// Business Solution Routes
Route::prefix('business-solution')->group(function () {
    Route::get('/nextcloud', [BusinessSolutionController::class, 'nextcloud'])->name('nextcloud');
    Route::get('/hcm-hcis', [BusinessSolutionController::class, 'hcmHcis'])->name('hcis');
});

// Sitemap Route (untuk SEO)
Route::get('/sitemap.xml', [PageController::class, 'sitemap'])->name('sitemap');

require __DIR__.'/auth.php';