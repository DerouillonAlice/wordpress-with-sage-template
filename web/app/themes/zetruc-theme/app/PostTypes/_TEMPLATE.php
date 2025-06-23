<?php

namespace App\PostTypes;

/**
 * Custom Post Type : TEMPLATE
 * 
 * INSTRUCTIONS :
 * 1. Renommez cette classe avec le nom de votre CPT (ex: Products, Events, etc.)
 * 2. Changez le nom du fichier pour correspondre (ex: Products.php, Events.php)
 * 3. Modifiez les propriétés $postType et $taxonomy
 * 4. Personnalisez les labels et paramètres dans register()
 * 5. Définissez vos champs ACF dans registerFields()
 * 6. Ajoutez votre formatage personnalisé dans customFormat() si nécessaire
 * 7. Ajoutez votre CPT dans app/post-types.php
 */
class TEMPLATE extends BasePostType
{
    // CHANGEZ CES VALEURS
    protected $postType = 'your_post_type';
    protected $taxonomy = 'your_taxonomy'; // Optionnel, supprimez si pas de taxonomie

    /**
     * Enregistre le Custom Post Type et ses taxonomies
     */
    public function register()
    {
        // 1. ENREGISTRE LE CPT
        register_post_type($this->postType, [
            'label' => 'VOTRE_LABEL_PLURIEL',
            'labels' => [
                'name' => 'VOTRE_LABEL_PLURIEL',
                'singular_name' => 'VOTRE_LABEL_SINGULIER',
                'add_new' => 'Ajouter',
                'add_new_item' => 'Ajouter un nouveau',
                'edit_item' => 'Modifier',
                'new_item' => 'Nouveau',
                'view_item' => 'Voir',
                'search_items' => 'Rechercher',
                'not_found' => 'Aucun trouvé',
                'not_found_in_trash' => 'Aucun dans la corbeille',
            ],
            'public' => true,
            'has_archive' => true,
            'menu_position' => 20, // CHANGEZ LA POSITION
            'menu_icon' => 'dashicons-admin-post', // CHANGEZ L'ICÔNE
            'show_in_menu' => true,
            'show_in_rest' => true,
            'rewrite' => ['slug' => $this->postType],
            'supports' => ['title', 'editor', 'thumbnail', 'page-attributes'],
        ]);

        // 2. ENREGISTRE LA TAXONOMIE (optionnel)
        if ($this->taxonomy) {
            register_taxonomy($this->taxonomy, $this->postType, [
                'label' => 'VOTRE_TAXONOMIE_LABEL',
                'labels' => [
                    'name' => 'VOTRE_TAXONOMIE_PLURIEL',
                    'singular_name' => 'VOTRE_TAXONOMIE_SINGULIER',
                    'add_new_item' => 'Ajouter',
                    'edit_item' => 'Modifier',
                    'update_item' => 'Mettre à jour',
                    'search_items' => 'Rechercher',
                ],
                'public' => true,
                'hierarchical' => true, // true = comme les catégories, false = comme les tags
                'show_in_rest' => true,
                'rewrite' => ['slug' => str_replace('_', '-', $this->taxonomy)],
            ]);
        }
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
            'key' => 'group_' . $this->postType . '_fields',
            'title' => 'Informations',
            'fields' => [
                // EXEMPLE DE CHAMP - PERSONNALISEZ SELON VOS BESOINS
                [
                    'key' => 'field_' . $this->postType . '_example',
                    'label' => 'Champ d\'exemple',
                    'name' => $this->postType . '_example',
                    'type' => 'text',
                    'instructions' => 'Description du champ',
                    'required' => 0,
                ],
                // AJOUTEZ VOS CHAMPS ICI
                /*
                [
                    'key' => 'field_' . $this->postType . '_image',
                    'label' => 'Image',
                    'name' => $this->postType . '_image',
                    'type' => 'image',
                    'return_format' => 'url',
                ],
                [
                    'key' => 'field_' . $this->postType . '_description',
                    'label' => 'Description',
                    'name' => $this->postType . '_description',
                    'type' => 'wysiwyg',
                ],
                */
            ],
            'location' => [
                [
                    [
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => $this->postType,
                    ],
                ],
            ],
        ]);
    }

    
}

/*
TYPES DE CHAMPS ACF DISPONIBLES :
- text
- textarea
- number
- email
- url
- password
- wysiwyg
- oembed
- image
- gallery
- file
- select
- checkbox
- radio
- button_group
- true_false
- date_picker
- date_time_picker
- time_picker
- color_picker
- message
- accordion
- tab
- group
- repeater
- flexible_content
- clone
- link
- post_object
- page_link
- relationship
- taxonomy
- user
- google_map
- range
 */