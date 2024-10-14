import Instantiable from '../Domain/Instantiable';

export default class DarkModeUseCase extends Instantiable
{
    __invoke()
    {
        const $document = document.documentElement;

        /* --- Dark mode ---*/

        const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');
        const themeToggleBtn = document.getElementById('theme-toggle');

        // Función para cambiar el tema
        const setTheme = (theme: string) => {
            const isDark = theme === 'dark';
            $document.classList.toggle('dark', isDark);
            themeToggleDarkIcon?.classList.toggle('hidden', isDark);
            themeToggleLightIcon?.classList.toggle('hidden', !isDark);
            localStorage.setItem('color-theme', theme);
        };

        // Comprobar tema inicial
        const savedTheme = localStorage.getItem('color-theme');
        const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

        if (savedTheme === 'dark' || (!savedTheme && systemPrefersDark)) {
            setTheme('dark');
        } else {
            setTheme('light');
        }

        // Evento de click para alternar el tema
        themeToggleBtn?.addEventListener('click', () => {
            const currentTheme = $document.classList.contains('dark') ? 'light' : 'dark';
            setTheme(currentTheme);
        });

        /* --- Sidebar status ---*/
        const sidebarToggleBtn = document.getElementById('sidebar-toggle');

        // Función para cambiar el estado del sidebar
        const setSidebar = (sidebar: string) => {
            const isCollapsed = sidebar === 'collapsed';
            $document.classList.toggle('sc', isCollapsed);
            localStorage.setItem('sidebar-state', sidebar);
        };

        // Comprobar tema inicial
        const savedSidebar = localStorage.getItem('sidebar-state');

        if (savedSidebar === 'collapsed') {
            setSidebar('collapsed');
        } else {
            setSidebar('expanded');
        }

        // Evento de click para alternar el tema
        sidebarToggleBtn?.addEventListener('click', () => {
            const currentTheme = $document.classList.contains('sc') ? 'expanded' : 'collapsed';
            setSidebar(currentTheme);
        });

    }
}
