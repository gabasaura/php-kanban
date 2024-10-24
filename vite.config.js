import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import postcssNesting from 'postcss-nesting';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    css: {
        postcss: {
            plugins: [postcssNesting],
        },
    },
    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'resources/js'), // Ajustar la ruta
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'), // Alias para importar Bootstrap fácilmente
        },
    },
});
