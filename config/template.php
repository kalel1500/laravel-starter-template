<?php

return [
    'sidebar_links' => [
        [
            'icon'         => '<svg aria-hidden="true" class="" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>',
            'text'         => 'Overview',
            'href'         => '#',
            'is_separator' => false,
            'is_bottom'    => false,
            'sub_links'    => null,
        ],
        [
            'icon'         => '',
            'text'         => 'Pages',
            'href'         => '#',
            'is_separator' => false,
            'is_bottom'    => false,
            'sub_links'    => [
                [
                    'text'         => 'Settings',
                    'href'         => '#',
                ],
                [
                    'text'         => 'Kanban',
                    'href'         => '#',
                ],
                [
                    'text'         => 'Calendar',
                    'href'         => '#',
                ],
            ],
        ],
        [
            'icon'         => '',
            'text'         => 'Sales',
            'href'         => '#',
            'is_separator' => false,
            'is_bottom'    => false,
            'sub_links'    => null,
        ],
        [
            'icon'         => '',
            'text'         => 'Messages',
            'href'         => '#',
            'is_separator' => false,
            'is_bottom'    => false,
            'sub_links'    => null,
        ],
        [
            'icon'         => '',
            'text'         => 'Authentication',
            'href'         => '#',
            'is_separator' => false,
            'is_bottom'    => false,
            'sub_links'    => null,
        ],
        //----- is_separator -----------------------------
        [
            'is_separator' => true,
        ],
        //----- end is_separator -----------------------------
        [
            'icon'         => null,
            'text'         => 'Docs',
            'href'         => '#',
            'is_separator' => false,
            'is_bottom'    => false,
            'sub_links'    => null,
        ],
        [
            'icon'         => null,
            'text'         => 'Components',
            'href'         => '#',
            'is_separator' => false,
            'is_bottom'    => false,
            'sub_links'    => null,
        ],
        [
            'icon'         => null,
            'text'         => 'Help',
            'href'         => '#',
            'is_separator' => false,
            'is_bottom'    => false,
            'sub_links'    => null,
        ],
        //----- bottom -----------------------------
    ],

];
