<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp8.1/htdocs/grav-admin/user/plugins/api_blog/blueprints.yaml',
    'modified' => 1704953800,
    'size' => 603,
    'data' => [
        'name' => 'ApiBlog',
        'version' => '1.1.1',
        'description' => 'Allows importing of user-defined YAML and JSON files to facilitate custom actions/settings',
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
        'routes' => [
            '/ajax-endpoint' => [
                'defaults' => [
                    '_controller' => '\\Grav\\Plugin\\ApiBlogPlugin::ajaxEndpoint'
                ],
                'methods' => [
                    0 => 'GET',
                    1 => 'POST'
                ]
            ]
        ]
    ]
];
