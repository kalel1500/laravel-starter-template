import { g, Test } from 'laravel-ts-utilities';
import { _const } from '../../../app/constants';
import { __ } from '../../../app/translations';

export default class TestController {
    test()
    {
        console.log('llega');
        g.startTooltips();
        console.log('continua?');
    }

    testConstants() {
        Test.printConstant();
        console.log('-------------------------');
        console.log(_const('lang'));
        console.log(_const('anotherSetting'));

        console.log('-------------------------');
        console.log('-------------------------');
        console.log('-------------------------');

        Test.printTranslation();
        console.log('-------------------------');
        console.log(__('contact_pi_team'));
        console.log(__('test_message'));
        console.log(__('qqq'));
    }
}
