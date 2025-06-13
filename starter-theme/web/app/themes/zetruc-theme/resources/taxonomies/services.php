<?php

add_action('init', function () {
    register_post_type('services', [
        'label'           => 'Services',
        'labels'          => [
            'name'          => 'Services',
            'singular_name' => 'Service',
        ],
        'public'          => true,
        'has_archive'     => true,
        'menu_position'   => 10,
        'menu_icon'       => 'dashicons-awards',
        'show_in_menu'    => true,
        'show_in_rest'    => true,
        'rewrite'         => ['slug' => 'services'],
        'supports'        => ['title', 'editor', 'thumbnail', 'page-attributes'],
    ]);
});

add_filter('rwmb_meta_boxes', function ($meta_boxes) {
    $meta_boxes[] = [
        'title'      => 'Informations du service',
        'id'         => 'services_cp',
        'post_types' => ['services'],
        'fields'     => [
            [
                'id'               => 'services_icon',
                'name'             => 'Icône',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ],
            [
                'id'   => 'services_desc',
                'name' => 'Description du Service',
                'type' => 'wysiwyg',
            ],
            [
                'id'   => 'services_link',
                'name' => 'Lien du bouton',
                'type' => 'url',
            ],
            [
                'id'   => 'services_link_text',
                'name' => 'Texte du bouton',
                'type' => 'text',
            ],
        ],
    ];

    return $meta_boxes;
});
