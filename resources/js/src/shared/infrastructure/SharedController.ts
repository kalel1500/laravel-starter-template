import DarkModeUseCase from '../Application/DarkModeUseCase';
import SidebarUseCase from '../Application/SidebarUseCase';

export default class SharedController
{
    layout()
    {
        DarkModeUseCase.new().__invoke();
        SidebarUseCase.new().__invoke();
    }
}
