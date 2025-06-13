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
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MotorolaController;
use App\Http\Controllers\SitemapController;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;


// Homepage
Route::get('/', [HomeController::class, 'index'])->name('home');

// Redirect dashboard (untuk backward compatibility)
Route::redirect('/dashboard', '/')->name('dashboard');

// Backend Routes (Protected with Auth)
Route::prefix('backend')->name('backend.')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.base.home');
    })->name('dashboard');

    // Articles Management
    Route::get('/articles', [ArticleController::class, 'adminIndex'])->name('articles.index');
    Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
    Route::put('/articles/{article}', [ArticleController::class, 'update'])->name('articles.update');
    Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy');
    Route::get('/articles/{article}', [ArticleController::class, 'edit'])->name('articles.edit');
    Route::patch('/articles/{article}/toggle-status', [ArticleController::class, 'toggleStatus'])->name('articles.toggle-status');


    // Careers Management
    Route::resource('careers', CareerController::class);
    Route::patch('careers/{career}/toggle-status', [CareerController::class, 'toggleStatus'])->name('careers.toggle-status');
    Route::patch('careers/{career}/update-status', [CareerController::class, 'updateStatus'])->name('careers.update-status');

    // Users Management
    Route::resource('users', UserController::class);
    Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::patch('users/{user}/toggle-status', [UserController::class, 'toggleStatus'])
        ->name('users.toggle-status');

    // Motorola Products Management
    Route::get('/motorola', [MotorolaController::class, 'adminIndex'])->name('motorola.index');
    Route::post('/motorola', [MotorolaController::class, 'store'])->name('motorola.store');
    Route::put('/motorola/{motorola}', [MotorolaController::class, 'update'])->name('motorola.update');
    Route::delete('/motorola/{motorola}', [MotorolaController::class, 'destroy'])->name('motorola.destroy');
    Route::patch('/motorola/{motorola}/toggle-status', [MotorolaController::class, 'toggleStatus'])
        ->name('motorola.toggle-status');
});


//contact email
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

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

//article
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{slug}', [ArticleController::class, 'show'])->name('articles.show');

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
    Route::get('/website-company-profile', [SoftwareHouseController::class, 'webDevelopment'])->name('develop-web');
    Route::get('/web-application', [SoftwareHouseController::class, 'webApplication'])->name('web-application');
    Route::get('/maintenance-website', [SoftwareHouseController::class, 'maintenance'])->name('maintenance-web');
});

// Other Services
Route::get('/cctv', [ServiceController::class, 'cctv'])->name('cctv');

// Motorola Routes
Route::get('/motorola', [MotorolaController::class, 'index'])->name('motorola');
Route::get('/motorola/{slug}', [MotorolaController::class, 'show'])->name('motorola.detail');

// Business Solution Routes
Route::prefix('business-solution')->group(function () {
    Route::get('/nextcloud', [BusinessSolutionController::class, 'nextcloud'])->name('nextcloud');
    Route::get('/hcm-hcis', [BusinessSolutionController::class, 'hcmHcis'])->name('hcis');
});

// Sitemap Route (untuk SEO)
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap.xml');
Route::get('/sitemap', [SitemapController::class, 'html'])->name('sitemap.html');
require __DIR__ . '/auth.php';
