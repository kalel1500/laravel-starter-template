import {defineConfig, loadEnv} from 'vite';
import laravel from 'laravel-vite-plugin';

export default ({ mode }: { mode: string }) => {
    process.env = Object.assign(process.env, loadEnv(mode, process.cwd(), ''));

    const env = process.env.APP_ENV ?? 'local'
    const useAppNameInSourcePath = (process.env.VITE_USE_APPNAME_IN_SOURCE_PATH === 'true')

    const envIsLocal = env === 'local';
    const envIsNotLocal = !envIsLocal;
    const modeIsProd = mode === 'production';

    const appName = process.env.VITE_APP_NAME_SHORT?.toLocaleLowerCase() ?? process.env.VITE_APP_NAME?.toLowerCase().replace(/(?:^\w|[A-Z]|\b\w|\s+|[_-])/g, (match, index) => index === 0 ? match.toLowerCase() : match.toUpperCase()).replace(/\s+|[_-]/g, '');
    const base = (useAppNameInSourcePath && modeIsProd) ? `/${appName}/build` : undefined;

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
            sourcemap: envIsLocal,
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
