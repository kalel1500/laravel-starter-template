import {__} from "../../../app/translations";

export default class HomeController
{
    index()
    {
        console.log(__('contact_pi_team'))

        console.log(__('test_message'))
        console.log(__('test_message_VARIABLE', {variable: 'qqqq'}))
    }
}
