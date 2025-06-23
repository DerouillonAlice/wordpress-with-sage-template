<?php

namespace App\PostTypes;

/**
 * EXEMPLE : Custom Post Type universel
 * 
 * Ce fichier montre comment créer un CPT simple avec BasePostType
 * 
 * UTILISATION :
 * - CustomPost::getAll()              // Tous les custom posts
 * - CustomPost::getById(123)          // Un custom post spécifique
 * - CustomPost::getRecent(5)          // Les 5 derniers custom posts
 * - CustomPost::getCategories()       // Toutes les catégories
 */
class CustomPost extends BasePostType
{
    protected $postType = 'custom_post';
    
    // OPTIONNEL : Nom de la taxonomie
    protected $taxonomy = 'custom_post_category';

    public function register()
    {
        register_post_type('custom_post', [
            'label' => 'Custom Posts',
            'labels' => [
                'name' => 'Custom Posts',
                'singular_name' => 'Custom Post',
                'add_new' => 'Ajouter un custom post',
                'add_new_item' => 'Ajouter un nouveau custom post',
                'edit_item' => 'Modifier le custom post',
                'new_item' => 'Nouveau custom post',
                'view_item' => 'Voir le custom post',
                'search_items' => 'Rechercher des custom posts',
                'not_found' => 'Aucun custom post trouvé',
                'not_found_in_trash' => 'Aucun custom post dans la corbeille',
            ],
            'public' => true,                    // Visible publiquement
            'has_archive' => true,               // Page d'archive (liste des custom posts)
            'menu_position' => 10,               // Position dans le menu admin
            'menu_icon' => 'dashicons-admin-post', // Icône dans le menu admin
            'show_in_menu' => true,              // Affichage dans le menu admin
            'show_in_rest' => true,             
            'rewrite' => ['slug' => 'custom-posts'], // URL finale : /custom-posts/mon-post
            'supports' => [                    
                'title',        // Titre
                'editor',       // Contenu
                'thumbnail',    // Image mise en avant
                'page-attributes' // Ordre des pages
            ],
        ]);

        // OPTIONNEL : Enregistrement d'une taxonomie 
        register_taxonomy('custom_post_category', 'custom_post', [
            'label' => 'Catégories de Custom Posts',
            'labels' => [
                'name' => 'Catégories de Custom Posts',
                'singular_name' => 'Catégorie de Custom Post',
                'add_new_item' => 'Ajouter une nouvelle catégorie',
                'edit_item' => 'Modifier la catégorie',
                'update_item' => 'Mettre à jour la catégorie',
                'search_items' => 'Rechercher des catégories',
            ],
            'public' => true,                         
            'hierarchical' => true,                     
            'show_in_rest' => true,                    
            'rewrite' => ['slug' => 'categorie-custom-post'], // URL : /categorie-custom-post/ma-categorie
        ]);
    }

    public function registerFields()
    {
        if (!function_exists('acf_add_local_field_group')) {
            return;
        }

        acf_add_local_field_group([
            'key' => 'group_custom_post_fields',           
            'title' => 'Informations du custom post',      // Titre dans l'admin
            'fields' => [
                
                // Exemple : Champ texte
                [
                    'key' => 'field_custom_post_texte',
                    'label' => 'Texte exemple',
                    'name' => 'custom_post_texte',              
                    'type' => 'text',
                    'required' => true,                   
                ],
                
                // Exemple : Description courte
                [
                    'key' => 'field_custom_post_description',
                    'label' => 'Description courte',
                    'name' => 'custom_post_description',
                    'type' => 'textarea',
                    'rows' => 3,
                ],
                
                // Exemple : Image
                [
                    'key' => 'field_custom_post_image',
                    'label' => 'Image exemple',
                    'name' => 'custom_post_image',
                    'type' => 'image',
                    'return_format' => 'url',             
                ],
                
                // Exemple : Contenu riche
                [
                    'key' => 'field_custom_post_contenu',
                    'label' => 'Contenu détaillé',
                    'name' => 'custom_post_contenu',
                    'type' => 'wysiwyg',                  
                    'media_upload' => false,              // Pas d'upload de médias
                    'toolbar' => 'basic',                 // Barre d'outils simplifiée
                ],
                
                // Exemple : Case à cocher
                [
                    'key' => 'field_custom_post_actif',
                    'label' => 'Actif',
                    'name' => 'custom_post_actif',
                    'type' => 'true_false',
                    'default_value' => true,              // Par défaut actif
                    'ui' => true,                         // Interface Switch On/Off
                ],
                
            ],
            
            // Conditions d'affichage : seulement sur le CPT 'custom_post'
            'location' => [
                [
                    [
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'custom_post',
                    ],
                ],
            ],
        ]);
    }
}