import {_const} from "../../../app/constants";
import {__} from "laravel-ts-utilities";
import {__t} from "../../../app/translations";

export default class HomeController
{
    index()
    {
        console.log(__('contact_pi_team'))
        console.log(__t('contact_pi_team'))


        console.log(__('testQqq'))
        console.log(__t('testQqq'))
    }
}
