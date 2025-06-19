<?php

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group([
        'key' => 'group_tets_content',
        'title' => 'Contenu de la page de test',
        'fields' => [

            [
                'key' => 'field_tets_title',
                'label' => 'Titre de la section',
                'name' => 'tets_title',
                'type' => 'text',
            ],
            
            [
                'key' => 'field_tets_content',
                'label' => 'Contenu',
                'name' => 'tets_content',
                'type' => 'wysiwyg',
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-tets.blade.php',
                ],
            ],
        ],
    ]);
}