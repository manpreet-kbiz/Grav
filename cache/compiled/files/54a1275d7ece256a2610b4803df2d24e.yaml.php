<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugins://api_blog/api_blog.yaml',
    'modified' => 1704954214,
    'size' => 476,
    'data' => [
        'enabled' => true,
        'route' => '/importjobs',
        'ajaxroute' => '/ajax-endpoint',
        'match_route' => '/getmatches',
        'search_route' => '/jobs',
        'parentfolder' => '04.jobs',
        'jobtemplate' => 'job.md',
        'template' => 'customtemp',
        'buttons' => [
            'facebook' => [
                'enabled' => true,
                'label' => 'Facebook'
            ],
            'twitter' => [
                'enabled' => true,
                'label' => 'Twitter'
            ],
            'googleplus' => [
                'enabled' => true,
                'label' => 'Google+'
            ],
            'linkedin' => [
                'enabled' => true,
                'label' => 'Linkedin'
            ],
            'email' => [
                'enabled' => true,
                'label' => 'Email'
            ]
        ]
    ]
];
