<?php

namespace App\PostTypes;

/**
 * Custom Post Type : Services
 */
class Services extends BasePostType
{
    protected $postType = 'services';
    protected $taxonomy = 'service_category';

    /**
     * Enregistre le Custom Post Type
     */
    public function register()
    {
        register_post_type('services', [
            'label' => 'Services',
            'labels' => [
                'name' => 'Services',
                'singular_name' => 'Service',
            ],
            'public' => true,
            'has_archive' => true,
            'menu_position' => 10,
            'menu_icon' => 'dashicons-awards',
            'show_in_menu' => true,
            'show_in_rest' => true,
            'rewrite' => ['slug' => 'services'],
            'supports' => ['title', 'editor', 'thumbnail', 'page-attributes'],
        ]);

        register_taxonomy('service_category', 'services', [
            'label' => 'Catégories de Services',
            'labels' => [
                'name' => 'Catégories de Services',
                'singular_name' => 'Catégorie de Service',
            ],
            'public' => true,
            'hierarchical' => true,
            'show_in_rest' => true,
            'rewrite' => ['slug' => 'service-category'],
        ]);
    }

    /**
     * Enregistre les champs ACF
     */
    public function registerFields()
    {
        if (!function_exists('acf_add_local_field_group')) {
            return;
        }

        acf_add_local_field_group([
            'key' => 'group_services_fields',
            'title' => 'Informations du service',
            'fields' => [
                [
                    'key' => 'field_services_icon',
                    'label' => 'Icône',
                    'name' => 'services_icon',
                    'type' => 'image',
                    'return_format' => 'url',
                ],
                [
                    'key' => 'field_services_desc',
                    'label' => 'Description du Service',
                    'name' => 'services_desc',
                    'type' => 'wysiwyg',
                ],
                [
                    'key' => 'field_services_link',
                    'label' => 'Lien du bouton',
                    'name' => 'services_link',
                    'type' => 'url',
                ],
                [
                    'key' => 'field_services_link_text',
                    'label' => 'Texte du bouton',
                    'name' => 'services_link_text',
                    'type' => 'text',
                ],
            ],
            'location' => [
                [
                    [
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'services',
                    ],
                ],
            ],
        ]);
    }
}
