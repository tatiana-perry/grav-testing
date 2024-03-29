<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/tatiana.perry/Documents/hosting-provider/grav-admin/user/plugins/markdown-clipboard/blueprints.yaml',
    'modified' => 1530014276,
    'data' => [
        'name' => 'Markdown Clipboard',
        'version' => '1.0.0',
        'description' => 'Adds the [ClipboardJS](https://clipboardjs.com/) script, which provides the ability to copy the code contained in PRE elements to the clipboard.',
        'icon' => 'paste',
        'author' => [
            'name' => 'Stellaris Studio (Loky)',
            'email' => 'stellaristudio@gmail.com',
            'url' => 'https://github.com/StellarisStudio'
        ],
        'homepage' => 'https://github.com/StellarisStudio/grav-plugin-markdown-clipboard',
        'demo' => 'https://clipboardjs.com/',
        'keywords' => 'clipboard, copy, markdown, plugin, code, pre',
        'bugs' => 'https://github.com/StellarisStudio/grav-plugin-markdown-clipboard/issue',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'built_in_css' => [
                    'type' => 'toggle',
                    'label' => 'Built in CSS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
