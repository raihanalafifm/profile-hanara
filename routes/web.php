<?php

use App\Http\Controllers\ApprovalController;
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
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\MotorolaController;
use App\Http\Controllers\SitemapController;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;


// Homepage
Route::get('/', [HomeController::class, 'index'])->name('home');

// Redirect dashboard (untuk backward compatibility)
Route::redirect('/dashboard', '/')->name('dashboard');

// Backend Routes (Protected with Auth)


//contact email
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// About Pages
Route::get('/tentang-kami', [PageController::class, 'about'])->name('about-us');
Route::get('/hubungi-kami', [PageController::class, 'contact'])->name('contact-us');

// Career Routes
Route::get('/karir', [CareerController::class, 'frontIndex'])->name('career');
Route::get('/karir/{career:slug}', [CareerController::class, 'frontShow'])->name('career.detail');
Route::post('/job-application', [JobApplicationController::class, 'submit'])->name('job-application.submit');
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
Route::get('/motorola', [MotorolaController::class, 'FrontendIndex'])->name('motorola');
Route::get('/motorola/{slug}', [MotorolaController::class, 'FrontendShow'])->name('motorola.detail');

// Business Solution Routes
Route::prefix('business-solution')->group(function () {
    Route::get('/hcm-hcis', [BusinessSolutionController::class, 'hcmHcis'])->name('hcis');
    Route::get('/nextcloud', [BusinessSolutionController::class, 'nextcloud'])->name('nextcloud');
    Route::get('/digital-marketing', [BusinessSolutionController::class, 'SosMed'])->name('sosmed');
    Route::get('/sikerja', [BusinessSolutionController::class, 'SiKerja'])->name('sikerja');
    Route::get('/mit', [BusinessSolutionController::class, 'MIT'])->name('mit');
});

// Sitemap Route (untuk SEO)
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap.xml');
Route::get('/sitemap', [SitemapController::class, 'html'])->name('sitemap.html');

require __DIR__ . '/auth.php';

Route::middleware(['auth'])->prefix('backend')->name('backend.')->group(function () {

    // Dashboard - accessible by both admin and user
    Route::get('/dashboard', function () {
        return view('backend.base.home');
    })->name('dashboard');

    // Articles - accessible by both admin and user
    Route::resource('articles', ArticleController::class);

    // Careers - accessible by both admin and user
    Route::resource('careers', CareerController::class);

    // Motorola - accessible by both admin and user
    Route::get('/motorola', [MotorolaController::class, 'adminIndex'])->name('motorola.index');
    Route::post('/motorola', [MotorolaController::class, 'store'])->name('motorola.store');
    Route::get('/motorola/{motorola}', [MotorolaController::class, 'show'])->name('motorola.show');
    Route::put('/motorola/{motorola}', [MotorolaController::class, 'update'])->name('motorola.update');
    Route::delete('/motorola/{motorola}', [MotorolaController::class, 'destroy'])->name('motorola.destroy');
    Route::get('/motorola/{motorola}/edit', [MotorolaController::class, 'edit'])->name('motorola.edit');

    // Admin only routes
    Route::middleware(['role:admin'])->group(function () {

        // Toggle status routes (admin only)
        Route::patch('/articles/{article}/toggle-status', [ArticleController::class, 'toggleStatus'])->name('articles.toggle-status');
        Route::patch('/careers/{career}/toggle-status', [CareerController::class, 'toggleStatus'])->name('careers.toggle-status');
        Route::patch('/careers/{career}/update-status', [CareerController::class, 'updateStatus'])->name('careers.update-status');
        Route::patch('/motorola/{motorola}/toggle-status', [MotorolaController::class, 'toggleStatus'])->name('motorola.toggle-status');

        // User management (admin only)
        Route::resource('users', UserController::class);

        // Approval routes (admin only)
        Route::prefix('approval')->name('approval.')->group(function () {
            Route::get('/', [ApprovalController::class, 'index'])->name('index');
            Route::get('/articles', [ApprovalController::class, 'articles'])->name('articles');
            Route::get('/careers', [ApprovalController::class, 'careers'])->name('careers');
            Route::get('/motorola', [ApprovalController::class, 'motorolaProducts'])->name('motorola');

            // Approval actions
            Route::post('/articles/{article}/approve', [ApprovalController::class, 'approveArticle'])->name('articles.approve');
            Route::post('/articles/{article}/reject', [ApprovalController::class, 'rejectArticle'])->name('articles.reject');
            Route::post('/careers/{career}/approve', [ApprovalController::class, 'approveCareer'])->name('careers.approve');
            Route::post('/careers/{career}/reject', [ApprovalController::class, 'rejectCareer'])->name('careers.reject');
            Route::post('/motorola/{product}/approve', [ApprovalController::class, 'approveMotorolaProduct'])->name('motorola.approve');
            Route::post('/motorola/{product}/reject', [ApprovalController::class, 'rejectMotorolaProduct'])->name('motorola.reject');

            // Get item details for modal
            Route::get('/item-details/{type}/{id}', [ApprovalController::class, 'getItemDetails'])->name('item-details');
        });
    });
});

// Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [UserController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [UserController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [UserController::class, 'destroy'])->name('profile.destroy');
});
