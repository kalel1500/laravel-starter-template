import {_const} from "../../../app/constants";

export default class HomeController {
    index() {
        console.log(_const("VITE_BROADCASTING_ENABLED"));
    }
}
