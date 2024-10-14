<?php

return [
    'sidebar_links' => [
        [
            'icon'         => '<svg aria-hidden="true" class="" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>',
            'text'         => 'Overview',
            'route_name'   => '#',
            'is_separator' => false,
            'is_bottom'    => false,
            'sub_links'    => null,
        ],
        [
            'icon'         => '',
            'text'         => 'Pages',
            'route_name'   => '#',
            'is_separator' => false,
            'is_bottom'    => false,
            'sub_links'    => [
                [
                    'text'          => 'Settings',
                    'route_name'    => 'home.example1',
                    'collapsed'     => false,
                ],
                [
                    'text'          => 'Kanban',
                    'route_name'    => 'home.example2',
                    'collapsed'     => false,
                ],
                [
                    'text'         => 'Calendar',
                    'route_name'   => 'home.example3',
                    'collapsed'     => false,
                ],
            ],
        ],
        [
            'icon'         => '',
            'text'         => 'Sales',
            'route_name'   => '#',
            'is_separator' => false,
            'is_bottom'    => false,
            'sub_links'    => null,
        ],
        [
            'icon'         => '',
            'text'         => 'Messages',
            'route_name'   => '#',
            'is_separator' => false,
            'is_bottom'    => false,
            'sub_links'    => null,
        ],
        [
            'icon'         => '',
            'text'         => 'Authentication',
            'route_name'   => '#',
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
            'route_name'   => '#',
            'is_separator' => false,
            'is_bottom'    => false,
            'sub_links'    => null,
        ],
        [
            'icon'         => null,
            'text'         => 'Components',
            'route_name'   => '#',
            'is_separator' => false,
            'is_bottom'    => false,
            'sub_links'    => null,
        ],
        [
            'icon'         => null,
            'text'         => 'Help',
            'route_name'   => '#',
            'is_separator' => false,
            'is_bottom'    => false,
            'sub_links'    => null,
        ],
        //----- bottom -----------------------------
    ],

];
