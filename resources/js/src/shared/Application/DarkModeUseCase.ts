import Instantiable from '../Domain/Instantiable';
import { route } from 'ziggy-js';
import { _const } from '../../../app/constants';

export default class DarkModeUseCase extends Instantiable
{
    __invoke()
    {
        const $document = document.documentElement;
        const VERSION = _const('VITE_APP_STORAGE_VERSION');  // Cambia este valor para invalidar el localStorage
        const VERSION_KEY = 'config-version';

        // Función para invalidar localStorage si cambia la versión
        const checkAndUpdateVersion = () => {
            const savedVersion = localStorage.getItem(VERSION_KEY);
            if (savedVersion !== VERSION) {
                localStorage.clear();
                localStorage.setItem(VERSION_KEY, VERSION);
            }
        };

        // Llama a la función para validar la versión
        checkAndUpdateVersion();

        // Función generalizada para cambiar clases y almacenar en localStorage
        const setState = (key: string, className: string, isActive: boolean) => {
            $document.classList.toggle(className, isActive);
            localStorage.setItem(key, isActive ? 'true' : 'false');
        };

        // Comprobar y aplicar estado inicial desde localStorage
        const initializeState = (key: string, className: string, prefersCondition: boolean, callback: Function | null = null) => {
            const savedState = localStorage.getItem(key);
            let isActive;
            // Si hay un estado guardado en localStorage, lo usamos
            if (savedState !== null) {
                isActive = savedState === 'true';
                setState(key, className, isActive);
            } else {
                // Si no hay estado guardado, prevalece la clase existente en el HTML
                isActive = $document.classList.contains(className) || prefersCondition;
            }

            setState(key, className, isActive);
            if (callback) callback(isActive);  // Ejecutar callback si se pasa uno
            return isActive;
        };

        /* --- Dark mode ---*/

        // Inicialización del tema oscuro
        const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');
        const themeToggleBtn = document.getElementById('theme-toggle');

        // Función para cambiar el tema y alternar íconos
        const setTheme = (isDark: boolean) => {
            setState('dark-theme', 'dark', isDark);
            themeToggleDarkIcon?.classList.toggle('hidden', isDark);
            themeToggleLightIcon?.classList.toggle('hidden', !isDark);
        };

        // Aplicar estado inicial del tema oscuro
        const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        initializeState('dark-theme', 'dark', systemPrefersDark, setTheme);

        // Evento de click para alternar el tema
        themeToggleBtn?.addEventListener('click', () => {
            const isDark = !$document.classList.contains('dark');
            setTheme(isDark);
        });

        /* --- Sidebar status ---*/

        // Clave personalizada para almacenar el estado del sidebar según la ruta actual
        const getSidebarKey = (routeName: string | undefined) => `sidebar-collapsed-${routeName}`;

        // Inicialización del estado del sidebar
        const sidebarToggleBtn = document.getElementById('sidebar-toggle');

        // Obtener el nombre de la ruta actual usando Ziggy
        const currentRoute = route().current();

        // Función para cambiar el estado del sidebar
        const setSidebar = (isCollapsed: boolean) => {
            const sidebarKey = getSidebarKey(currentRoute);
            setState(sidebarKey, 'sc', isCollapsed);
        };

        // Aplicar estado inicial del sidebar para la ruta actual
        const sidebarKey = getSidebarKey(currentRoute);
        initializeState(sidebarKey, 'sc', false);

        // Evento de click para alternar el estado del sidebar
        sidebarToggleBtn?.addEventListener('click', () => {
            const isCollapsed = !$document.classList.contains('sc');
            setSidebar(isCollapsed);
        });

    }
}
