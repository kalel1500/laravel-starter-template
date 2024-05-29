// import g from "./utils-js/helpers/global";
// import { defineRoutes } from "./app/routes";
// import Route from "./utils-js/routing/Route";
// import Echo from "laravel-echo";
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
    interface Window {
        Pusher: any;
        // Echo: Echo;
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
import '@popperjs/core';

// Enable tooltips
// g.startTooltips()


/*----- NOTIFICACIONES -----------------------------------------------------------------------------------------------*/
// Notify.checkAndRequestPermission()


/*----- RUTAS --------------------------------------------------------------------------------------------------------*/

// Definimos y ejecutamos las rutas de JS
// defineRoutes()
// Route.dispatch()
