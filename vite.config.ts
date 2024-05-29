import {defineConfig, loadEnv} from 'vite';
import laravel from 'laravel-vite-plugin';

type Mode = 'production' | 'develop'

export default ({ mode }: { mode: Mode }) => {
    process.env = Object.assign(process.env, loadEnv(mode, process.cwd(), ''));
    const envIsLocal = (process.env.VITE_APP_ENV === 'local');
    const envIsNotLocal = !envIsLocal;
    const base = (process.env.VITE_USE_APPNAME_IN_SOURCE_PATH === 'true' && (mode === 'production'))
        ? `/${process.env.VITE_APP_NAME_SHORT?.toLocaleLowerCase()}/build`
        : undefined;

    return defineConfig({
        plugins: [
            laravel({
                input: ['resources/css/app.css', 'resources/js/app.ts'],
                refresh: false,
            }),
        ],
        base: base,
        build: {
            minify: envIsNotLocal,
            target: "es2022",
            rollupOptions: {
                output: {
                    manualChunks: id => {
                        if (id.includes('node_modules')) {
                            return 'vendor';
                        }
                    }
                }
            }
        },
        css: {
            devSourcemap: true
        },
    });
}
