import Instantiable from '../Domain/Instantiable';
import Mutation from '../Domain/Mutation';

export default class SidebarUseCase extends Instantiable
{
    __invoke()
    {
        Mutation.observe({
            elementId: 'drawer-navigation',
            class: '-translate-x-full',
            whenHave: () => {
                console.log('cerrado');
            },
            whenHavent: () => {
                console.log('abierto');
            }
        });

        /*let isCollapsed = false;
        const toggleSidebar = document.getElementById('sidebar-toggle');
        if (toggleSidebar === null) return;
        toggleSidebar.addEventListener('click', () => {
            console.log('toggleSidebar', isCollapsed);
            if (isCollapsed) {
                document.documentElement.classList.remove('sc');
                isCollapsed = false;
            } else {
                document.documentElement.classList.add('sc');
                isCollapsed = true;
            }


        });*/
    }
}
