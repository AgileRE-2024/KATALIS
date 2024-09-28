import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'vendors/feather/feather.css', // Ensure this path is correct
                'vendors/ti-icons/css/themify-icons.css', // Ensure this path is correct
                'vendors/css/vendor.bundle.base.css', // Ensure this path is correct
                'vendors/datatables.net-bs4/dataTables.bootstrap4.css', // Ensure this path is correct
                // Add any additional files you need
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
