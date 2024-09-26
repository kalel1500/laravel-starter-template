import { _const } from '../../../app/constants';
import {g} from "laravel-ts-utilities";

export default class HomeController {
    index() {
        console.log(_const('VITE_BROADCASTING_ENABLED'));
        g.consoleInfo('ss');
    }
}
