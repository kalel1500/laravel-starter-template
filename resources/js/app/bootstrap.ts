// Declare .env variables
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
        };
    }
}

// INICIALIZAR CONSTANTES Y TRADUCCIONES (para que se apliquen en el paquete aunque no se utilicen en la app)
import "./constants";
import "./translations";

// Los otros imports (debajo)
import {Route, UtilitiesServiceProvider} from "laravel-ts-utilities";
import {defineRoutes} from "./routes";

// Definir que acciones ejecutar del paquete
UtilitiesServiceProvider.features(["registerGlobalError", "enableNotifications"]);

// Definimos y ejecutamos las rutas de JS
defineRoutes();
Route.dispatch();
