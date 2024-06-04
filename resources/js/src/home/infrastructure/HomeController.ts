import {__} from "../../../app/translations";
import {_const} from "../../../app/constants";

export default class HomeController
{
    index()
    {
        console.log(_const.anotherSetting)
        console.log(__('contact_pi_team'))
        console.log(__('test_message'))
        console.log(__('test_message_VARIABLE', {variable: 'qqqq'}))
    }
}
