import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import {laravelTsUtilsPlugin} from "laravel-ts-utilities/plugins";

export default () => {
    return defineConfig({
        plugins: [
            laravel({
                input: ['resources/css/app.css', 'resources/js/app.ts'],
                refresh: false,
            }),
            laravelTsUtilsPlugin(),
        ]
    });
}
