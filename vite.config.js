import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/modal.css',
                'resources/css/styles.css',
                // JS
                'resources/js/app.js',
                'resources/js/init.js',
                'resources/js/userState.js',
                'resources/js/dependiente.js',
                'resources/js/modal.js'
            ],
            refresh: true,
        }),
    ],

    server: {
        hmr: {
            host: 'localhost'
        }
    }
});