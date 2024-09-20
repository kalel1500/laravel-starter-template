import {defineConfig, loadEnv} from 'vite';
import laravel from 'laravel-vite-plugin';
import {laravelTsUtilsPlugin} from "laravel-ts-utilities/plugins";

type EnvVariables = {
    VITE_APP_ENV: string;
    VITE_APP_NAME: string;
    VITE_APP_CODE: string;
    VITE_CONF_MINIFY: string;
    VITE_CONF_SOURCEMAP: string;
    VITE_CONF_USE_APPCODE_IN_SOURCE_PATH: string;
}

export default ({ mode }: { mode: string }) => {
    const env: EnvVariables                    = loadEnv(mode, process.cwd()) as EnvVariables;
    const confAppName                   = env.VITE_APP_NAME;
    const confAppCode                   = env.VITE_APP_CODE;
    const confAppMinify                 = env.VITE_CONF_MINIFY === 'true';
    const confAppSourcemap              = env.VITE_CONF_SOURCEMAP === 'true';
    const confUseAppCodeInSourcePath    = env.VITE_CONF_USE_APPCODE_IN_SOURCE_PATH === 'true'
    const modeIsProd                    = mode === 'production';

    const appCode = confAppCode?.toLocaleLowerCase() ?? confAppName?.toLowerCase().replace(/(?:^\w|[A-Z]|\b\w|\s+|[_-])/g, (match, index) => index === 0 ? match.toLowerCase() : match.toUpperCase()).replace(/\s+|[_-]/g, '');
    const base = (confUseAppCodeInSourcePath && modeIsProd) ? `/${appCode}/build` : undefined;

    return defineConfig({
        plugins: [
            laravel({
                input: ['resources/css/app.css', 'resources/js/app.ts'],
                refresh: false,
            }),
            laravelTsUtilsPlugin(),
        ],
        base: base,
        build: {
            minify: confAppMinify,
            sourcemap: confAppSourcemap,
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
