<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/tatiana.perry/Documents/hosting-provider/grav-admin/user/plugins/page-toc/blueprints.yaml',
    'modified' => 1558113738,
    'data' => [
        'name' => 'Page Toc',
        'version' => '1.1.0',
        'description' => 'Generate a table of contents from a page',
        'icon' => 'list',
        'author' => [
            'name' => 'Trilby Media, LLC',
            'email' => 'hello@trilby.media',
            'url' => 'http://trilby.media'
        ],
        'homepage' => 'http://trilby.media',
        'keywords' => 'grav, plugin, toc',
        'bugs' => 'https://github.com/trilbymedia/grav-plugin-page-toc/issues',
        'docs' => 'https://github.com/trilbymedia/grav-plugin-page-toc/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'active' => [
                    'type' => 'toggle',
                    'label' => 'Active by default',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'start' => [
                    'type' => 'select',
                    'size' => 'x-small',
                    'classes' => 'fancy',
                    'label' => 'Start header tag',
                    'options' => [
                        1 => 'h1',
                        2 => 'h2',
                        3 => 'h3',
                        4 => 'h4',
                        5 => 'h5',
                        6 => 'h6'
                    ]
                ],
                'depth' => [
                    'type' => 'select',
                    'size' => 'x-small',
                    'classes' => 'fancy',
                    'label' => 'Depth',
                    'options' => [
                        1 => 1,
                        2 => 2,
                        3 => 3,
                        4 => 4,
                        5 => 5,
                        6 => 6
                    ]
                ]
            ]
        ]
    ]
];
