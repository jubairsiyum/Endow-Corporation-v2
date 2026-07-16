<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about-us', [PageController::class, 'about'])->name('about');
Route::get('/get-consulting', [PageController::class, 'consulting'])->name('consulting');
Route::get('/contact-us', [PageController::class, 'contact'])->name('contact');
Route::get('/{division:slug}', [PageController::class, 'division'])->name('division.show');

// Forms
Route::post('/appointments', [FormController::class, 'storeAppointment'])->name('appointment.store');
Route::post('/contact', [FormController::class, 'storeContact'])->name('contact.store');
Route::post('/newsletter', [FormController::class, 'storeNewsletter'])->name('newsletter.store');

// SEO
Route::get('/sitemap.xml', function () {
    $pages = [
        ['url' => '/', 'priority' => '1.0', 'changefreq' => 'weekly'],
        ['url' => '/about-us', 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['url' => '/endow-travels', 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['url' => '/endow-global-education', 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['url' => '/endow-technologies', 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['url' => '/contact-us', 'priority' => '0.7', 'changefreq' => 'monthly'],
        ['url' => '/get-consulting', 'priority' => '0.7', 'changefreq' => 'monthly'],
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

    return response($xml, 200)
        ->header('Content-Type', 'application/xml');
})->name('sitemap');

Route::get('/robots.txt', function () {
    $content = "User-agent: *\n";
    $content .= "Allow: /\n";
    $content .= "Disallow: /admin/\n";
    $content .= "Disallow: /filament/\n";
    $content .= "\n";
    $content .= 'Sitemap: '.url('/sitemap.xml')."\n";

    return response($content, 200)
        ->header('Content-Type', 'text/plain');
})->name('robots');
