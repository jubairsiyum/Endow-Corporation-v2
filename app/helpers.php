<?php

if (! function_exists('storage_url')) {
    /**
     * Generate a URL for a file stored on the public disk.
     *
     * Uses the /uploads/ route (StorageController@serve) to serve files from
     * storage/app/public/ without needing a symlink. Safe for shared hosting
     * environments like Hostinger, cPanel, etc. where symlinks are unsupported.
     *
     * @param  string|null  $path  Relative path within the public disk (e.g. "posts/abc.jpg")
     * @return string|null
     */
    function storage_url(?string $path): ?string
    {
        if (blank($path)) {
            return null;
        }

        return asset('uploads/' . ltrim($path, '/'));
    }
}
