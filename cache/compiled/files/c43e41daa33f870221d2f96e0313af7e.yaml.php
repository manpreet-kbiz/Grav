<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp8.1/htdocs/grav-admin/user/themes/quarkcustom/blueprints/default.yaml',
    'modified' => 1704883687,
    'size' => 1112,
    'data' => [
        'extends@' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'title' => 'Content',
                            'fields' => [
                                'header.custom.optimizedchatgptdescription' => [
                                    'type' => 'textarea',
                                    'label' => 'Optimized Description',
                                    'rows' => 10,
                                    'border' => '1px solid'
                                ],
                                'header.custom.socialdescription' => [
                                    'type' => 'textarea',
                                    'label' => 'Social Description',
                                    'rows' => 7,
                                    'border' => '1px solid'
                                ],
                                'button_label' => [
                                    'type' => 'submit',
                                    'label' => 'Share On Social',
                                    'onclick' => 'generateDescription()'
                                ]
                            ]
                        ],
                        'advanced' => [
                            'fields' => [
                                'columns' => [
                                    'fields' => [
                                        'column1' => [
                                            'fields' => [
                                                'header.body_classes' => [
                                                    'markdown' => true,
                                                    'description' => 'Available classes in Quark Theme (space separated):<br />`header-fixed`, `header-animated`, `header-dark`, `header-transparent`, `sticky-footer`'
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
