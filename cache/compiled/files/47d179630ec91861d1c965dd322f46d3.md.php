<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp8.1/htdocs/grav-admin/user/pages/04.jobs/jobslisting.md',
    'modified' => 1706682003,
    'size' => 178,
    'data' => [
        'header' => [
            'title' => 'jobs',
            'content' => [
                'items' => [
                    0 => '@self.children'
                ],
                'limit' => 12,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'pagination' => true,
                'url_taxonomy_filters' => true
            ]
        ],
        'frontmatter' => 'title: jobs
content:
    items:
        - \'@self.children\'
    limit: 12
    order:
        by: date
        dir: desc
    pagination: true
    url_taxonomy_filters: true',
        'markdown' => ''
    ]
];
