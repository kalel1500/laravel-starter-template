// import g from "./utils-js/helpers/global";
import {defineRoutes} from "./routes";
import {Route} from "laravel-ts-utilities";
import Echo from "laravel-echo";
// import {registerTranslations} from "./translations";
// import Notify from "./utils-js/notifications/Notify";

declare global {
    interface ImportMeta {
        readonly env: {
            readonly VITE_BROADCASTING_ENABLED: string
            readonly VITE_REVERB_APP_KEY: string
            readonly VITE_REVERB_HOST: string
            readonly VITE_REVERB_PORT: string
            readonly VITE_REVERB_SCHEME: string
            readonly VITE_APP_NAME: string
            readonly VITE_APP_ENV: string
        }
    }
}


/*----- ERROR GLOBAL -------------------------------------------------------------------------------------------------*/

/*window.onerror = (message, source, lineno, colno, error) => {
    return g.handleGlobalError(error)
};*/


/*----- AXIOS --------------------------------------------------------------------------------------------------------*/

/*import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';*/


/*----- BOOTSTARP ----------------------------------------------------------------------------------------------------*/

// Added: Actual Bootstrap JavaScript dependency
// import * as bootstrap from 'bootstrap';

// Added: Popper.js dependency for popover support in Bootstrap
// import '@popperjs/core';

// Enable tooltips
// g.startTooltips()


/*----- NOTIFICACIONES -----------------------------------------------------------------------------------------------*/
// Notify.checkAndRequestPermission()


/*----- TRADUCCIONES --------------------------------------------------------------------------------------------------------*/

// Definimos y ejecutamos las rutas de JS
// registerTranslations()


/*----- RUTAS --------------------------------------------------------------------------------------------------------*/

// Definimos y ejecutamos las rutas de JS
defineRoutes()
Route.dispatch()
