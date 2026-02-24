<?php

namespace App\PostTypes;

/**
 * Page d'options globales via ACF Pro
 * Remplace GlobalSettings quand ACF Pro est actif
 */
class GlobalThemeOptions
{
    private $global_fields = [
        'footer_address' => [
            'label' => 'Adresse',
            'type' => 'textarea',
            'rows' => 3,
        ],
        'footer_phone' => [
            'label' => 'Téléphone',
            'type' => 'text',
        ],
        'footer_email' => [
            'label' => 'Email',
            'type' => 'email',
        ],
        'social_facebook' => [
            'label' => 'Facebook URL',
            'type' => 'url',
        ],
        'social_twitter' => [
            'label' => 'Twitter URL',
            'type' => 'url',
        ],
        'social_linkedin' => [
            'label' => 'LinkedIn URL',
            'type' => 'url',
        ],
        'social_instagram' => [
            'label' => 'Instagram URL',
            'type' => 'url',
        ],
        'footer_about_title' => [
            'label' => 'Titre section "À propos"',
            'type' => 'text',
            'default_value' => 'À propos',
        ],
        'footer_about_content' => [
            'label' => 'Contenu section "À propos"',
            'type' => 'textarea',
            'rows' => 4,
        ],
    ];

    public function __construct()
    {
        // Ne s'active que si ACF Pro est présent
        if (!function_exists('acf_is_pro') || !acf_is_pro()) {
            return;
        }

        add_action('acf/init', [$this, 'register_options_page']);
        add_action('acf/init', [$this, 'register_acf_fields']);
        add_action('wp', [$this, 'share_with_views']);
    }

    /**
     * Créer la page d'options ACF Pro
     */
    public function register_options_page()
    {
        acf_add_options_page([
            'page_title' => 'Paramètres du site',
            'menu_title' => 'Paramètres du site',
            'menu_slug' => 'theme-general-settings',
            'capability' => 'edit_posts',
            'redirect' => false,
            'icon_url' => 'dashicons-admin-settings',
            'position' => 10,
        ]);
    }

    /**
     * Enregistrer les champs ACF sur la page d'options
     */
    public function register_acf_fields()
    {
        if (!function_exists('acf_add_local_field_group')) {
            return;
        }

        $acf_fields = [];
        foreach ($this->global_fields as $name => $config) {
            $acf_fields[] = array_merge([
                'key' => 'field_option_' . $name,
                'name' => $name,
            ], $config);
        }

        acf_add_local_field_group([
            'key' => 'group_theme_options',
            'title' => 'Paramètres globaux',
            'fields' => $acf_fields,
            'location' => [
                [
                    [
                        'param' => 'options_page',
                        'operator' => '==',
                        'value' => 'theme-general-settings',
                    ],
                ],
            ],
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
        ]);
    }

    /**
     * Partager les options avec toutes les vues Blade
     */
    public function share_with_views()
    {
        if (function_exists('view')) {
            $shared_data = [];

            foreach (array_keys($this->global_fields) as $field) {
                $shared_data[$field] = get_field($field, 'option');
            }

            view()->share($shared_data);
        }
    }
}
