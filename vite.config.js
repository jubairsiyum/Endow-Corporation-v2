import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/scroll-stack.css',
                'resources/js/scroll-stack.js',
                'resources/css/timeline.css',
                'resources/css/dome-gallery.css',
                'resources/js/dome-gallery.js',
                'resources/css/admin.css',
                'resources/css/quill-editor.css',
                'resources/js/quill-editor.js',
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
