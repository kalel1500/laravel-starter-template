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
    }
}
