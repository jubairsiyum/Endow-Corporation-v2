<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SeoPageController;
use Illuminate\Support\Facades\Route;

// Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// Public Pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about-us', [PageController::class, 'about'])->name('about');
Route::get('/get-consulting', [PageController::class, 'consulting'])->name('consulting');
Route::get('/contact-us', [PageController::class, 'contact'])->name('contact');
Route::get('/travel', [PageController::class, 'travel'])->name('travel');
Route::get('/{division:slug}', [PageController::class, 'division'])->name('division.show');

// Education SEO Pages
Route::get('/study-abroad-programs', [SeoPageController::class, 'studyAbroad'])->name('seo.study-abroad');
Route::get('/scholarship-guidance', [SeoPageController::class, 'scholarships'])->name('seo.scholarships');
Route::get('/language-training-certifications', [SeoPageController::class, 'languageTraining'])->name('seo.language-training');

// Technology SEO Pages
Route::get('/ai-automation-solutions', [SeoPageController::class, 'aiAutomation'])->name('seo.ai-automation');
Route::get('/cloud-computing-security', [SeoPageController::class, 'cloudComputing'])->name('seo.cloud-computing');
Route::get('/custom-software-development', [SeoPageController::class, 'softwareDevelopment'])->name('seo.software-development');

// Legal Pages
Route::get('/privacy-policy', [SeoPageController::class, 'privacyPolicy'])->name('seo.privacy-policy');
Route::get('/terms-of-service', [SeoPageController::class, 'termsOfService'])->name('seo.terms-of-service');

// Careers
Route::view('/careers', 'pages.careers')->name('careers');

// Form Submissions
Route::post('/appointments', [FormController::class, 'storeAppointment'])->name('appointment.store');
Route::post('/contact', [FormController::class, 'storeContact'])->name('contact.store');
Route::post('/newsletter', [FormController::class, 'storeNewsletter'])->name('newsletter.store');

// Admin Routes (Protected)
Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('filament.admin.pages.dashboard');
    })->name('dashboard');
});

// SEO
Route::get('/sitemap.xml', function () {
    $pages = [
        ['url' => '/', 'priority' => '1.0', 'changefreq' => 'weekly'],
        ['url' => '/about-us', 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['url' => '/endow-travels', 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['url' => '/endow-global-education', 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['url' => '/endow-technologies', 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['url' => '/hospital-tourism', 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['url' => '/contact-us', 'priority' => '0.7', 'changefreq' => 'monthly'],
        ['url' => '/get-consulting', 'priority' => '0.7', 'changefreq' => 'monthly'],
        ['url' => '/blog', 'priority' => '0.9', 'changefreq' => 'weekly'],
        ['url' => '/careers', 'priority' => '0.7', 'changefreq' => 'monthly'],
        // Education SEO
        ['url' => '/study-abroad-programs', 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['url' => '/scholarship-guidance', 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['url' => '/language-training-certifications', 'priority' => '0.8', 'changefreq' => 'monthly'],
        // Technology SEO
        ['url' => '/ai-automation-solutions', 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['url' => '/cloud-computing-security', 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['url' => '/custom-software-development', 'priority' => '0.8', 'changefreq' => 'monthly'],
        // Legal
        ['url' => '/privacy-policy', 'priority' => '0.3', 'changefreq' => 'yearly'],
        ['url' => '/terms-of-service', 'priority' => '0.3', 'changefreq' => 'yearly'],
    ];

    $xml = '<?xml version="1.0" encoding="UTF-8"?>'."\n";
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'."\n";
    foreach ($pages as $page) {
        $xml .= '  <url>'."\n";
        $xml .= '    <loc>'.url($page['url']).'</loc>'."\n";
        $xml .= '    <lastmod>'.now()->toDateString().'</lastmod>'."\n";
        $xml .= '    <changefreq>'.$page['changefreq'].'</changefreq>'."\n";
        $xml .= '    <priority>'.$page['priority'].'</priority>'."\n";
        $xml .= '  </url>'."\n";
    }
    $xml .= '</urlset>';

    return response($xml, 200)->header('Content-Type', 'application/xml');
})->name('sitemap');

Route::get('/robots.txt', function () {
    $content = "User-agent: *\n";
    $content .= "Allow: /\n";
    $content .= "Disallow: /admin/\n";
    $content .= "Disallow: /filament/\n";
    $content .= "\n";
    $content .= 'Sitemap: '.url('/sitemap.xml')."\n";

    return response($content, 200)->header('Content-Type', 'text/plain');
})->name('robots');
