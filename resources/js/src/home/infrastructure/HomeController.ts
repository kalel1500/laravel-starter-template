import { g } from 'laravel-ts-utilities';

export default class HomeController {
    index() {
        g.consoleInfo('Inicio');
    }
}
