<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp8.1/htdocs/grav-admin/user/pages/05.blog/blog.md',
    'modified' => 1706681744,
    'size' => 179,
    'data' => [
        'storage_key' => '05.blog',
        'header' => [
            'title' => 'blog',
            'content' => [
                'items' => [
                    0 => '@self.children'
                ],
                'limit' => 5,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'pagination' => true,
                'url_taxonomy_filters' => true
            ]
        ],
        'root' => false,
        'frontmatter' => 'title: blog',
        'slug' => 'blog',
        'name' => 'blog.md',
        'ordering' => true
    ]
];
