<?php

namespace App\Fields;

/**
 * Champs ACF spécifiques à la page d'accueil
 */
class HomePageFields
{
    public function __construct()
    {
        add_action('acf/init', [$this, 'register']);
    }

    public function register()
    {
        if (!function_exists('acf_add_local_field_group')) {
            return;
        }

        acf_add_local_field_group([
            'key' => 'group_home_content',
            'title' => 'Contenu de la page d\'accueil',
            'fields' => [
                [
                    'key' => 'field_tab_1',
                    'label' => 'Section principale',
                    'type' => 'tab',
                    'placement' => 'top',
                ],
                [
                    'key' => 'field_home_section_title',
                    'label' => 'Titre de la section',
                    'name' => 'home_section_title',
                    'type' => 'text',
                ],
                [
                    'key' => 'field_home_section_content',
                    'label' => 'Contenu de la section',
                    'name' => 'home_section_content',
                    'type' => 'wysiwyg',
                ],
                [
                    'key' => 'field_home_section_image',
                    'label' => 'Image de la section',
                    'name' => 'home_section_image',
                    'type' => 'image',
                    'return_format' => 'url',
                ],
                [
                    'key' => 'field_tab_2',
                    'label' => 'Section supplémentaire',
                    'type' => 'tab',
                    'placement' => 'top',
                ],
                [
                    'key' => 'field_extra_section_title',
                    'label' => 'Titre section extra',
                    'name' => 'extra_section_title',
                    'type' => 'text',
                ],
                [
                    'key' => 'field_extra_section_content',
                    'label' => 'Contenu section extra',
                    'name' => 'extra_section_content',
                    'type' => 'wysiwyg',
                ],
            ],
            'location' => [
                [
                    [
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'page-home.blade.php',
                    ],
                ],
            ],
        ]);
    }
}
