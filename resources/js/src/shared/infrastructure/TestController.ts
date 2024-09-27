import { g, Test } from 'laravel-ts-utilities';
import { _const } from '../../../app/constants';
import { __ } from '../../../app/translations';
import { Collapse, CollapseInterface, CollapseOptions, InstanceOptions } from 'flowbite';

export default class TestController
{
    test()
    {
        console.log('llega');
        g.startTooltips();
        console.log('continua?');
    }

    testConstants()
    {
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

    testFlowbiteCollapse()
    {
        // set the target element that will be collapsed or expanded (eg. navbar menu)
        const $targetEl = document.getElementById('navbar-sticky');

        // optionally set a trigger element (eg. a button, hamburger icon)
        // const $triggerEl: HTMLElement = document.getElementById('triggerEl');

        // optional options with default values and callback functions
        const options: CollapseOptions = {
            onCollapse: () => {
                console.log('element has been collapsed');
            },
            onExpand: () => {
                console.log('element has been expanded');
            },
            onToggle: () => {
                console.log('element has been toggled');
            },
        };

        // instance options object
        const instanceOptions: InstanceOptions = {
            id: 'targetEl',
            override: true
        };

        /*
         * $targetEl: required
         * $triggerEl: optional
         * options: optional
         * instanceOptions: optional
         */
        const collapse: CollapseInterface = new Collapse(
            $targetEl,
            null,
            options,
            instanceOptions
        );

        // show the target element
        collapse.expand();
        g.sleep(1000).then(() => {

            collapse.collapse();

            g.sleep(1000).then(() => {

                collapse.toggle();

                g.sleep(1000).then(() => {

                    collapse.toggle();

                    g.sleep(1000).then(() => {

                        collapse.toggle();

                        g.sleep(1000).then(() => {

                            collapse.toggle();
                        });
                    });
                });
            });
        });
    }
}
