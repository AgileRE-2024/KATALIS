import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'vendors/feather/feather.css',
                'resources/css/app.css',
                'vendors/ti-icons/css/themify-icons.css',
                'vendors/css/vendor.bundle.base.css',
                'vendors/datatables.net-bs4/dataTables.bootstrap4.css',
                'vendors/ti-icons/css/themify-icons.css',
            ],
            refresh: true,
        }),
    ],
});
