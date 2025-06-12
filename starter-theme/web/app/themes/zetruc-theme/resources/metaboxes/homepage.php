<?php

add_filter('rwmb_meta_boxes', function ($meta_boxes) {
    $meta_boxes[] = [
        'title'      => 'Contenu de la page d’accueil',
        'id'         => 'home_content',
        'post_types' => ['page'],
        'include'    => [
            'relation' => 'AND',
            [
                'key'     => '_wp_page_template',
                'value'   => 'views/page-home.blade.php',
                'compare' => '=',
            ],
        ],
        'fields'     => [
            [
                'name' => 'Titre de la section',
                'id'   => 'home_section_title',
                'type' => 'text',
            ],
            [
                'name' => 'Image d’illustration',
                'id'   => 'home_section_image',
                'type' => 'image_advanced',
                'max_file_uploads' => 1,
            ],
            [
                'name' => 'Contenu',
                'id'   => 'home_section_content',
                'type' => 'wysiwyg',
            ],
        ],
    ];

    return $meta_boxes;
});
