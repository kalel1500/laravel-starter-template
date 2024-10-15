import { Instantiable, Mutation } from 'laravel-ts-utilities';

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
