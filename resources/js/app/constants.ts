import {Constants, DefaultConstants} from "laravel-ts-utilities";

interface AppConstants extends DefaultConstants {
    anotherSetting: string;
}

const Const = Constants.getInstance() as Constants<AppConstants>;
Const.extend({
    appIcon: new URL('/resources/images/favicon.ico', import.meta.url).href,
    VITE_BROADCASTING_ENABLED: import.meta.env.VITE_BROADCASTING_ENABLED === 'true',
    VITE_REVERB_APP_KEY: import.meta.env.VITE_REVERB_APP_KEY,
    VITE_REVERB_HOST: import.meta.env.VITE_REVERB_HOST,
    VITE_REVERB_PORT: parseInt(import.meta.env.VITE_REVERB_PORT),
    VITE_REVERB_SCHEME: import.meta.env.VITE_REVERB_SCHEME,
    VITE_APP_NAME: import.meta.env.VITE_APP_NAME,
    VITE_APP_ENV: import.meta.env.VITE_APP_ENV,
    anotherSetting: 'newCustomValue',
});
export const _const = Const.getConstants()
