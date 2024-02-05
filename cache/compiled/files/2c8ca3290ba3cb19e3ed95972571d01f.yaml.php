<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp8.1/htdocs/grav-admin/user/plugins/chat_gpt/blueprints.yaml',
    'modified' => 1704096410,
    'size' => 1114,
    'data' => [
        'name' => 'ChatGpt',
        'version' => '1.1.1',
        'description' => 'Allow to generate the  Description  from the Chat Gpt',
        'icon' => 'paperclip',
        'author' => [
            'name' => 'Sohan',
            'email' => 'daleep.kbizsoft@gmail.com',
            'url' => 'https://www.kbizsoft.com'
        ],
        'keywords' => 'plugin, import, yaml, json, files',
        'homepage' => 'https://github.com/kbizsoft/grav-plugin-import',
        'bugs' => 'https://github.com/kbizsoft/grav-plugin-import/issues',
        'demo' => 'https://kbizsoft.com/demos/import',
        'license' => 'MIT',
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'title' => 'Configuration',
                            'fields' => [
                                'enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Enable ChatGpt Plugin',
                                    'highlight' => 1,
                                    'default' => true,
                                    'options' => [
                                        1 => 'Enabled',
                                        0 => 'Disabled'
                                    ]
                                ],
                                'api_key' => [
                                    'type' => 'text',
                                    'label' => 'API Key',
                                    'help' => 'Enter your ChatGpt API key',
                                    'default' => '',
                                    'validate' => [
                                        'required' => true
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            'validation' => [
                'rules' => [
                    0 => [
                        'enabled' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
