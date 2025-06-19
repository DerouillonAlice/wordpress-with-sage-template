<?php

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group([
        'key' => 'group_home_content',
        'title' => 'Contenu de la page d’accueil',
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
                'key' => 'field_home_section_image',
                'label' => 'Image illustration',
                'name' => 'home_section_image',
                'type' => 'image',
                'return_format' => 'url',
            ],
            [
                'key' => 'field_home_section_content',
                'label' => 'Contenu',
                'name' => 'home_section_content',
                'type' => 'wysiwyg',
            ],
            [
                'key' => 'field_tab_2',
                'label' => 'Onglet supplémentaire',
                'type' => 'tab',
            ],
            [
                'key' => 'field_extra_section_title',
                'label' => 'Titre supplémentaire',
                'name' => 'extra_section_title',
                'type' => 'text',
            ],
            [
                'key' => 'field_extra_section_content',
                'label' => 'Contenu supplémentaire',
                'name' => 'extra_section_content',
                'type' => 'textarea',
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