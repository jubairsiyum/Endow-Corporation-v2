<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class StorageController extends Controller
{
    /**
     * Serve files from storage/app/public/ — for servers without symlink support.
     *
     * This replaces the standard `php artisan storage:link` symlink approach.
     * Use the `storage_url()` helper to generate URLs pointing here.
     */
    public function serve(string $path)
    {
        $allowed = [
            'jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'ico',
            'pdf', 'css', 'js', 'woff', 'woff2', 'ttf', 'eot',
            'mp4', 'webm', 'ogg',
        ];

        $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));

        if (! in_array($ext, $allowed)) {
            abort(404);
        }

        // Sanitize: strip directory traversal attempts
        $safePath = str_replace(['../', '..\\', "\0"], '', $path);
        $file = storage_path('app/public/' . $safePath);

        if (! file_exists($file) || ! is_file($file)) {
            abort(404);
        }

        return Response::file($file, [
            'Cache-Control' => 'public, max-age=31536000, immutable',
        ]);
    }
}
