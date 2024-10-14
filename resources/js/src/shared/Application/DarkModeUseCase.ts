import Instantiable from '../Domain/Instantiable';

export default class DarkModeUseCase extends Instantiable
{
    __invoke()
    {
        const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');
        const themeToggleBtn = document.getElementById('theme-toggle');
        const $document = document.documentElement;

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
    }
}
